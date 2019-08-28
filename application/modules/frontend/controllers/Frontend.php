<?php

/**
* 
*/
class Frontend extends MY_Controller
{

	public function __construct()
	{

		parent::__construct();		
		$this->load->helper('url');
		$this->_init();
		 
	}
	private function _init()
	{		
		$this->output->set_template('tem_frontend/tem_frontend');
	}

	public function index()
	{
		$data = array(
			'menu' => 0
		);
		
		$this->load->view('frontend',$data);
		
	}


	


}

