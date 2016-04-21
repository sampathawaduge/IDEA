<?php

class Login_controller extends CI_Controller
{
    //Loads helper classes and library classes
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
    //calls the login.html page initially
    public  function index()
    {
          $this->load->view('login.html');

    }
    public function getdata()
    {
        //get the posted values
        $username = $this->input->post("txt_username");
        $password = $this->input->post("txt_password");

        //set validations
        $this->form_validation->set_rules("txt_username", "Username", "trim|required");
        $this->form_validation->set_rules("txt_password", "Password", "trim|required");

        if($this->form_validation->run()==FALSE)
        {
            //validation fails
            $this->load->view('login.html');
        }
        else
        {
            //validation succeeds
            if($this->input->post('btn_login')=="Login")
            {
                //check if the username amd password is correct
                $usr_result=$this->Login_model->get_user($username, $password);

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
                else
                {

                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                    redirect('login.html');
                }
            }
            else
            {
                redirect('welcome');
            }
        }

    }
//    public function getdata()
//    {
//        //loads the model
//        $this->load->model('Login_model');
//
//        //get the posted values from the login form
//        $username = $this->input->post("txt_username");
//        $password = $this->input->post("txt_password");
//
//        //passing username and password as arguments to the get_user method in model
//        $usr_result = $this->Login_model->get_user($username, $password);
//
//        if ($usr_result > 0) //checking active user record is present
//        {
//            //set the session variables
//                $sessiondata = array(
//                    'username' => $username,
//                    'loginuser' => TRUE
//                );
//
//            $this->session->set_userdata($sessiondata);
//
//            redirect("Login_controller/mainpage");
//        }
//
//    }
    public function mainpage()
    {
        $this->load->model('Latest_submissions');
        $this->load->model('userprof');

        $variable1=NULL;

        $username=$this->session->userdata['username'];
        

        
        $user=$this->userprof->getUserDetails($username);
        $category=$this->Latest_submissions->getusercategory($username);

        foreach ($category as $item) {
            $variable1=$item->category;
        }

        $categories=$this->Latest_submissions->getcategorynames($variable1);
        $submissions = $this->Latest_submissions->getsubmissions($categories);

        $data['user']=$user;
        $data['submissions']=$submissions;

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
