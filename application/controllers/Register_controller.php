<?php 
    
  class Register_controller extends CI_Controller
  {
      public function __construct()
      {
          parent::__construct();
          
      }
      public function registeruser()
      {
          $username=$this->input->post('name');
          $email=$this->input->post('email');
          $password=$this->input->post('password');
          $category=$this->input->post('category');

          $array=[
              'name'=>$username,
              'email' => $email,
              'password' => $password,
              'category' => $category,
          ];

          $this->load->model("Register_model");
          if($this->Register_model->add_db($array,$email))
          {
              $this->load->view('login.html');
          }
          
          
          
      }
      
  }

