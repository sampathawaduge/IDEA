<?php //
//
//  class Register_controller extends CI_Controller
//  {
//      public function __construct()
//      {
//          parent::__construct();
//
//      }
//      public function registeruser()
//      {
//          $username=$this->input->post('name');
//          $email=$this->input->post('email');
//          $password=$this->input->post('password');
//          $category=$this->input->post('category');
//
//          $array=[
//              'name'=>$username,
//              'email' => $email,
//              'password' => $password,
//              'category' => $category,
//          ];
//
//          $this->load->model("Register_model");
//          if($this->Register_model->add_db($array,$email))
//          {
//              $this->load->view('login.html');
//          }
//
//
//
//      }
//
//  }
//

class Register_controller extends CI_Controller
  {
      public function __construct()
      {
          parent::__construct();
          $this->load->helper('url');
          $this->load->helper('form');
          $this->load->library('session');
          $this->load->library('form_validation');
          $this->load->database();
          $this->load->model('Login_model');

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

          ///starts of Iruka's parts
          $array2=[
              'id'=>$username,
              'mem_type' => 'Basic Member',
//              'sub_count' => 'o',

          ];
          //ends of iruka's part

          $this->load->model("Register_model");
          if($this->Register_model->add_db($array,$email))
          {
              //start of Iruka parts
              $this->Register_model->add_db2($array2);
              //ends of Iruka's part
              $this->load->view('login.html');
          }



      }

  }

