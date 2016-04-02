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
            $this->session->set_userdata($sessiondata);
            redirect("Login_controller/mainpage");
        }
        
    }
    public function mainpage()
    {
        $this->load->view('templates/header');
        $this->load->view('1');
        $this->load->view('templates/footer');

    }


}
?>