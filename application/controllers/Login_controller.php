<?php

class Login_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');


    }
    public  function index()
    {
          $this->load->view('login.html');

    }
    /**Get data passed from login view
     *
     ***/
    public function getdata()
    {
                //get the posted valuesz
        $username = $this->input->post("txt_username");
        $password = $this->input->post("txt_password");

        $this->load->model('Login_model');
        $usr_result = $this->Login_model->get_user($username, $password);
        if ($usr_result > 0) //active user record is present
        {
            //set the session variables

                $sessiondata = array(
                    'username' => $username,
                    'loginuser' => TRUE
                );

//            $sessiondata = array(
//                'username' => $username,
//                'loginuser' => TRUE
//            );
            $this->session->set_userdata($sessiondata);
            redirect("Login_controller/mainpage");
        }
        
    }
    public function mainpage()
    {
        $username=$this->session->userdata['username'];
        $this->load->model('Latest_submissions');
        $val=$this->Latest_submissions->get_latest($username);
        
        $this->load->model('userprof');
        $user=$this->userprof->getUserDetails($username);
        
        $data['working']=$val;
        $data['user']=$user;
        
        $this->load->view('templates/header');
        $this->load->view('1',$data);
        $this->load->view('templates/footer');
//        $this->load->view('templates/header');
//        $this->load->view('add_submission 2');
//        $this->load->view('templates/footer');

    }
    public function logout()
    {
        //if ($this->input->post('btn_login') == "Login")
        $sess_array = array(
            'username'=>''
        );
        $this->session->unset_userdata('set_userdata',$sess_array);
        //$data['message_display']='Successfully logout';
        $this->session->sess_destroy();
        $this->load->view("login.html");
    }


}
