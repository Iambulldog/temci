<?php

/**
* 
*/
class Backend extends MY_Controller
{

	public function __construct()
	{

		parent::__construct();		
		$this->load->helper('url');
		$this->_init();
		$this->load->library('users/users_library');
		$this->load->model('backend_model');
	}
	private function _init()
	{		
		$this->output->set_template('tem_admin/tem_admin');
	}
	public function index()
	{
		$data = array('menu' => 'index');
		$this->load->view('home_admin',$data);
	}
	// ==========  user _all ============
	public function user_All()
	{
		$data = array('menu' => 'user_All');		
		$this->load->view('user_all',$data);		
	}
	public function my_user()
	{
		echo json_encode($this->backend_model->get_user_all());
		die();
	}
	public function add_user()
	{	
		$salt = $this->users_library->salt();
		$pass = $this->users_library->hash_password($this->input->post('password'),$salt);
		$gendata = array(
			'name' => $this->input->post('firstname'),
			'sername' => $this->input->post('lastname'),
			'nickname' => $this->input->post('nickname'),
			'tel' => $this->input->post('tel'),
			'username' => $this->input->post('username'),
			'password' => $pass,	
			'salt' => $salt,
		);

		echo json_encode($this->backend_model->save_newuser($gendata));
		die();
	}
	// ========== end user _all ============


}

