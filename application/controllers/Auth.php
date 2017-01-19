<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Base_Controller {

  function __construct() {
    parent::__construct();
    //$this->load->config('auth');
    $this->load->model('auth_model');
  }

  public function index()
  {
    $data['class_page'] = 'sign-in-page';
		$data['content'] = 'contents/login';
		$this->load->view('layouts/flipmart', $data);
  }

  public function validation_login()
  {
    
  }

}

/* End of file Auth.php */
