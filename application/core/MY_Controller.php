<?php

class MY_Controller extends MX_Controller
{
 
  public $class;
  public $method;
  public $site_config = array();
  public function __construct()
  {
    parent::__construct();

     $this->class = $this->router->fetch_class();
     $this->method = $this->router->fetch_method();

     $this->load->library('users/users_library');
       if($this->class == 'backend'){
              
              $this->users_library->check_login();
       }
       
       if($this->class == 'api'){
         $this->load->model('api_model');
        
        //  echo $this->input->method();
        echo $this->input->input_stream('domain');
               if($this->input->post('domain')){
                $site = $this->api_model->find_api_key($this->input->post('domain'));
                if($site != FALSE){
                  $this->site_config = $site;
                  // print_r($this->site_config);
                }
               }else{
                  
               }
              
       }
       



  }






}

 ?>
