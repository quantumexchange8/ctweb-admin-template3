<?php

namespace App\Controllers;
use App\Libraries\Hash;
use App\Models\ContactModel;

class ContactController extends BaseController
{
    public function __construct(){
        helper(['url', 'form', 'text']);
        $this->db = \Config\Database::connect();
        $this->model = $this->db->table('contacts');
    }
    public function index()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Dynamic Advance Table']),
            'page_title' => view('partials/page-title', ['title' => 'Dynamic Advance Table', 'pagetitle' => 'Tables'])
        ];
        return view('dynamic-table-advance', $data);
    }

    public function fetch(){
        $order = $this->request->getVar("order");
        $dir = $this->request->getVar("dir");
        $data = array();
        if(!empty($order) && !empty($dir)){
            $query = $this->model->orderBy($order, $dir)->get();
        } else {
            $query = $this->model->orderBy('id', 'DESC')->get();
        }
        foreach ($query->getResult() as $row) {
            $data[] = [
                'id'=>$row->id,
                'name'=>$row->name,
                'position'=>$row->position,
                'email'=>$row->email,
                'image'=>($row->image == null || $row->image == '') ? "no-image.jpg" : $row->image,
                'status'=>$row->status,
                'checked'=>($row->status == 1) ? "checked" : ""
            ];
        }
        $array = [
            'total_records'=>$this->model->countAll(),
            'data'=>$data
        ];
        echo json_encode($array);
    }

    public function add_update(){
        $hdn_id = $this->request->getPost('hdn_id');
        $name = trim($this->request->getPost('name'));
        $position = trim($this->request->getPost('position'));
        $email = trim($this->request->getPost('email'));

        $imageName = null;
        if($_FILES['image']['name'] != ''){
            $filename = basename($_FILES['image']['name']);
            $extension = end(explode('.', $filename));
            $newfilename = 'image_'.uniqid().'.'.$extension;
            $location = 'uploads/' . $newfilename;
            $valid_ext = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array(strtolower($extension), $valid_ext)){
                @move_uploaded_file($_FILES['image']['tmp_name'], $location);
                $imageName = $newfilename;
            }
        }
        
        $dataArray = [
            'name' => $name,
            'position' => $position,
            'email' => $email,
            'status' => 1
        ];
        if(!isset($hdn_id) || trim($hdn_id) == ''){
            if($imageName == null){
                $dataArray['image'] = null;
            }else{
                $dataArray['image'] = $imageName;
            }
            $insert = $this->model->insert($dataArray);
            if($insert){
                echo 'Contact Save Successfully.';
            }else{
                echo 'Unable to Add Contact.';
            }
        }else{
            $old_file = trim($this->request->getPost('old_file'));
            if($imageName == null){
                $dataArray['image'] = $old_file;
            }else{
                @unlink('uploads/'.$old_file);
                $dataArray['image'] = $imageName;
            }
            $update = $this->model->set($dataArray)->where('id', $hdn_id)->update();
            if($update){
                echo 'Contact Updated Successfully.';
            }else{
                echo 'Unable to Update Contact.';
            }
        }
    }

    public function edit(){
        $inputdata = stripslashes(file_get_contents("php://input"));
        $input = json_decode($inputdata, true);
        $cid = trim($input['cid']);
        $contactModel = new contactModel();
        $data = $contactModel->where('id', $cid)->first();
        echo json_encode($data);
    }

    public function delete(){
        $inputdata = stripslashes(file_get_contents("php://input"));
        $input = json_decode($inputdata, true);
        $cid = trim($input['cid']);
        $contactModel = new contactModel();
        $data = $contactModel->where('id', $cid)->first();
        if(@file_exists('uploads/'.$data['image'])){
            @unlink('uploads/'.$data['image']);
        }
        $delete = $this->model->where('id', $cid)->delete();
        if($delete){
            echo 'Contact Deleted Successfully.';
        }else{
            echo 'Something went wrong.';
        }
    }

    public function delete_all($ids = ''){
        $contactModel = new contactModel();
        $ids_array = explode(',', trim($ids));
        if(!empty($ids_array)){
            foreach($ids_array as $id){
                $data = $contactModel->where('id', $id)->first();
                if(@file_exists('uploads/'.$data['image'])){
                    @unlink('uploads/'.$data['image']);
                }
                $this->model->where('id', $id)->delete();
            }
        }
        return redirect()->to('/dynamic-table-advance')->with('success', 'Success');
    }

    public function status_change(){
        $inputdata = stripslashes(file_get_contents("php://input"));
        $input = json_decode($inputdata, true);
        $cid = trim($input['cid']);
        $status = trim($input['status']);
        $update = $this->model->set('status', $status)->where('id', $cid)->update();
        if($update){
            echo 'Status Updated Successfully.';
        }else{
            echo 'Unable to Update Status.';
        }
    }
}