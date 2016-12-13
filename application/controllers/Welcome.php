<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {

	public function index()
	{
		$data['home'] 	 = true;
		$data['content'] = 'contents/home';
		$this->load->view('layouts/flipmart', $data);
	}

	public function login()
	{
		$data['class_page'] = 'sign-in-page';
		$data['content'] = 'contents/login';
		$this->load->view('layouts/flipmart', $data);
	}
}
