<?php
class User_profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }

    public function index()
    {
        if (empty($this->session->userdata['username'])) {
            redirect(site_url('login'));
        } else {
            $user = $this->session->userdata['username'];
            $this->load->model('userprof');

            $subs = $this->userprof->getSubmissions($user);

            $data['subs'] = $subs;
            $data['user'] = $user;

            $details = $this->userprof->getUserDetails($user);

            $data['details'] = $details;

//            $this->load->view("profile", $data);
            $this->load->view('templates/header');
            $this->load->view('profile', $data);
            $this->load->view('templates/footer');


        }
    }

}