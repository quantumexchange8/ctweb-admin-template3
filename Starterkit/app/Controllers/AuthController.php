<?php

namespace App\Controllers;
use App\Libraries\Hash;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function __construct(){
        helper(['url', 'form', 'text']);
    }
    public function index()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Login'])
        ];
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Register'])
        ];
        return view('auth/register', $data);
    }

    public function forget_password()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Recover Password'])
        ];
        return view('auth/forget_password', $data);
    }

    public function reset_password($token)
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Reset Password']),
            'token' => $token
        ];
        return view('auth/reset_password', $data);
    }

    public function email_verify(){
        $session = \Config\Services::session();
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Two Step Verification']),
            'otp_email' => $session->get('otp_email')
        ];
        return view('auth/email_verify', $data);
    }

    public function otp_verify(){
        $email = trim($this->request->getPost('email'));
        $newOtp = $this->request->getPost('otp_1').$this->request->getPost('otp_2').$this->request->getPost('otp_3').$this->request->getPost('otp_4');
        if(!isset($email) || trim($email) == ''){
            return redirect()->to('/login');
        }
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();
        if($newOtp == $user['otp']){
            $data = [
                'otp'=>null,
                'is_verify'=>1
            ];
            $userModel->set($data)->where('id', $user['id'])->update();
            session()->remove('otp_email');
            session()->setFlashdata('success', 'Your Verification Completed.');
            return redirect()->to('/login');
        }else{
            return redirect()->back()->with('error', 'Invalid Verification Code.');
        } 
    }

    public function otp_resend(){
        $session = \Config\Services::session();
        $email = $session->get('otp_email');

        $otp = mt_rand(1111, 9999);
        $subject = 'Email Verification';
        $message = 'Your Verification Code : '.$otp;
        $sendEmail = $this->emailSend($email, $subject, $message);
        if(!$sendEmail){
            return redirect()->back()->with('error', 'Email Sending Failed, Contact to Admin.');
        }else{
            $userModel = new UserModel();
            $userModel->set('otp', $otp)->where('email', $email)->update();
            session()->set('otp_email', $email);
            return redirect()->back()->with('success', 'Verification Code Resend Successfully.');
        }
    }

    public function register_store()
    {
        $validation = $this->validate([
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[8]',
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required'=>'The confirm password field is required.',
                    'matches'=>'The confirm password field does not match the password field.'
                ]
            ]
        ]);

        if(!$validation){
            $data = [
                'title_meta' => view('partials/title-meta', ['title' => 'Register']),
                'validation' => $this->validator
            ];
            return view('auth/register', $data);
        }else{
            $recaptcha = trim($this->request->getVar('g-recaptcha-response'));
            $recaptchaResponse = $this->verifyRecaptcha($recaptcha);
            if($recaptchaResponse == false){
                return redirect()->to('/register')->with('error', 'Please Verify Captcha.');
            }else{
                $name = trim($this->request->getPost('name'));
                $email = trim($this->request->getPost('email'));
                $password = trim($this->request->getPost('password'));
                $insertData = [
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password),
                    'otp' => null,
                    'is_verify' => 0
                ];
                $userModel = new UserModel();
                $insert = $userModel->insert($insertData);
                if(!$insert){
                    return redirect()->to('/register')->with('error', 'Something went wrong.');
                }else{
                    //return redirect()->to('/login')->with('success', 'Register Successfully.');
                    $otp = mt_rand(1111, 9999);
                    $subject = 'Email Verification';
                    $message = 'Your Verification Code : '.$otp;
                    $sendEmail = $this->emailSend($email, $subject, $message);
                    if(!$sendEmail){
                        return redirect()->back()->with('error', 'Email Sending Failed, Contact to Admin.');
                    }else{
                        $userModel->set('otp', $otp)->where('email', $email)->update();
                        session()->set('otp_email', $email);
                        return redirect()->to('/email-verify');
                    }
                }
            }
        }
    }

    public function authCheck()
    {
        $validation = $this->validate([
            'email'=>[
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'is_not_unique' => 'This email is not registered with us.'
                ]
            ],
            'password'=>'required'
        ]);

        if(!$validation){
            return view('auth/login', ['validation'=>$this->validator]);
        }else{
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new UserModel();
            $userInfo = $userModel->where('email', $email)->first();
            $checkPassword = Hash::check($password, $userInfo['password']);
            if(!$checkPassword){
                session()->setFlashdata('error', 'Incorrect Password.');
                return redirect()->to('/login');
            }else{
                if($userInfo['is_verify'] == 0){
                    $otp = mt_rand(1111, 9999);
                    $subject = 'Email Verification';
                    $message = 'Your Verification Code : '.$otp;
                    $sendEmail = $this->emailSend($email, $subject, $message);
                    if(!$sendEmail){
                        return redirect()->back()->with('error', 'Email Sending Failed, Contact to Admin.');
                    }else{
                        $userModel->set('otp', $otp)->where('email', $email)->update();
                        session()->set('otp_email', $email);
                        return redirect()->to('/email-verify');
                    }
                }else{
                    $session_data = [
                        'userId' => $userInfo['id'],
                        'userName' => $userInfo['name'],
                        'userEmail' => $userInfo['email'],
                        'isLoggedIn' => TRUE
                    ];
                    session()->set($session_data);
                    return redirect()->to('/');
                }
            }
        }
    }

    public function email_check(){
        $validation = $this->validate([
            'email'=>[
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'is_not_unique' => 'This email is not registered with us.'
                ]
            ]
        ]);

        if(!$validation){
            $data = [
                'title_meta' => view('partials/title-meta', ['title' => 'Recover Password']),
                'validation' => $this->validator
            ];
            return view('auth/forget_password', $data);
        }else{
            $email = trim($this->request->getPost('email'));
            $token = random_string('alnum', 50);
            $userModel = new UserModel();
            $userModel->set('token', $token)->where('email', $email)->update();
            $data = [
                'email' => $email,
                'token' => $token
            ];
            $subject = 'Reset Password';
            $emailMessage = view('email/email_forget_password', $data);
            $sendEmail = $this->emailSend($email, $subject, $emailMessage);
            if(!$sendEmail){
                return redirect()->back()->with('error', 'Email Sending Failed, Contact to Admin.');
            }else{
                return redirect()->back()->with('success', 'We Have E-Mailed Your Password Reset Link!');
            }
        }

    }

    public function reset_password_update(){
        $validation = $this->validate([
            'email'=>[
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'is_not_unique' => 'This email is not registered with us.'
                ]
            ],
            'password' => 'required|min_length[4]|max_length[8]',
            'confirm_password' => 'required|matches[password]'
        ]);

        if(!$validation){
            return view('auth/reset_password', ['validation'=>$this->validator]);
        }else{
            $email = trim($this->request->getPost('email'));
            $token = trim($this->request->getPost('token'));
            $password = trim($this->request->getPost('password'));

            $userModel = new UserModel();
            $user = $userModel->where('email', $email)->first();
            if(!empty($user)){
                if($user['token'] == $token){
                    // update password and set token null
                    $data = [
                        'token' => null,
                        'password' => Hash::make($password) 
                    ];
                    $userModel->set($data)->where('id', $user['id'])->update();
                    return redirect()->to('/login')->with('success', 'Your password has been changed!');
                }else{
                    return redirect()->back()->with('error', 'Invalid Token.');
                }
            }else{
                return redirect()->back()->with('error', 'Email Not Match with Our Records.');
            }
        }
    }

    public function logout(){
        $session_data = ['userId', 'userName', 'userEmail', 'isLoggedIn'];
        session()->remove($session_data);
        return redirect()->to('/login');
    }

    function emailSend($to = '', $subject = '', $message = ''){
        $email = \Config\Services::email();
        $email->setFrom('test.sky007@gmail.com', 'Symox Admin');
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) {
           return true;
        } else {
            //print_r($email->printDebugger(['headers']));
            return false;
        }
    }

    function verifyRecaptcha($recaptchaResponse){
        $request = \Config\Services::request();
        $userIp=$request->getIPAddress(); 
        $secret='6Lc5pm0dAAAAADgekfCsu0qlksOfPXfepOiwImck';
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp), true);
        if($response['success'] == false){
            return false;
        }else{
            return true;
        }
    }

}