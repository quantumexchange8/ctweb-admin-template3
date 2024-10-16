<?php namespace App\Controllers;

class PageController extends BaseController
{
	public function index()
	{
		//index method
	}

	public function auth_login(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Login'])
		];
		return view('auth-login', $data);
	}

	public function auth_register(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Register'])
		];
		return view('auth-register', $data);
	}

	public function auth_recoverpw(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Recover Password'])
		];
		return view('auth-recoverpw', $data);
	}

	public function auth_lock_screen(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lock Screen'])
		];
		return view('auth-lock-screen', $data);
	}

	public function auth_logout(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Logout'])
		];
		return view('auth-logout', $data);
	}

	public function auth_confirm_mail(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Confirm Mail'])
		];
		return view('auth-confirm-mail', $data);
	}

	public function auth_email_verification(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Email Verification'])
		];
		return view('auth-email-verification', $data);
	}

	public function auth_two_step_verification(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Two Step Verification'])
		];
		return view('auth-two-step-verification', $data);
	}



	
	public function pages_starter(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Starter Page']),
			'page_title' => view('partials/page-title', ['title' => 'Starter Page', 'pagetitle' => 'Utility'])
		];
		return view('pages-starter', $data);
	}

	public function pages_maintenance(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Maintenance'])
		];
		return view('pages-maintenance', $data);
	}

	public function pages_comingsoon(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Coming Soon'])
		];
		return view('pages-comingsoon', $data);
	}

	public function pages_timeline(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Timeline']),
			'page_title' => view('partials/page-title', ['title' => 'Timeline', 'pagetitle' => 'Utility'])
		];
		return view('pages-timeline', $data);
	}

	public function pages_faqs(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'FAQs']),
			'page_title' => view('partials/page-title', ['title' => 'FAQs', 'pagetitle' => 'Utility'])
		];
		return view('pages-faqs', $data);
	}

	public function pages_pricing(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Pricing']),
			'page_title' => view('partials/page-title', ['title' => 'Pricing', 'pagetitle' => 'Utility'])
		];
		return view('pages-pricing', $data);
	}

	public function pages_404(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error 404'])
		];
		return view('pages-404', $data);
	}

	public function pages_500(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error 500'])
		];
		return view('pages-500', $data);
	}

	public function layouts_vertical(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Vertical Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Vertical', 'pagetitle' => 'Layouts'])
		];
		return view('layouts-vertical', $data);
	}

	//--------------------------------------------------------------------

}
