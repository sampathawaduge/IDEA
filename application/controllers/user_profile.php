<?php
//class User_profile extends CI_Controller
//{
//
//    public function __construct()
//    {
//        parent::__construct();
//        $this->load->helper('url');
//        $this->load->library('session');
//
//    }
//
//    public function index()
//    {
//        if (empty($this->session->userdata['username'])) {
//            redirect(site_url('login'));
//        } else {
//            $user = $this->session->userdata['username'];
//            $this->load->model('userprof');
//
//            $subs = $this->userprof->getSubmissions($user);
//
//            $data['subs'] = $subs;
//            $data['user'] = $user;
//
//            $details = $this->userprof->getUserDetails($user);
//
//            $data['details'] = $details;
//
////            $this->load->view("profile", $data);
//            $this->load->view('templates/header');
//            $this->load->view('profile', $data);
//            $this->load->view('templates/footer');
//
//
//        }
//    }
//
//}
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

            //start of iruka's part
            $mem = $this->userprof->memDetails($user);
            $data['mem'] = $mem;
            $count = $this->userprof->SubCount($user);

            $data['count'] = $count;
            //           echo ($count);
            $x= $this->userprof->memType($user);
            $data['x']=$x;
            //ends of iruka's part

//            $this->load->view("profile", $data);
            $this->load->view('templates/header');
            $this->load->view('profile1', $data);
            $this->load->view('templates/footer');


        }
    }

    public function adduserdata()
    {
        $username=$this->input->post('name');
        $email=$this->input->post('email');
        $occupation=$this->input->post('occupation');
        $password=$this->input->post('password');
        $telephone=$this->input->post('telephone');


        $array=[
            'name'=>$username,
            'email' => $email,
            'occupation' => $occupation,
            'password' => $password,
            'telephone' => $telephone,
        ];

        $this->load->model("userprof");

        if($this->userprof->addto_db($array,$email))
        {
            $this->load->model('userprof');
            
            $user = $this->session->userdata['username'];

            $details = $this->userprof->getUserDetails($user);

            $user = $this->session->userdata['username'];
            $this->load->model('userprof');

            $subs = $this->userprof->getSubmissions($user);

            $data['user'] = $details;
            $data['subs'] = $subs;
            $data['user'] = $user;

            $details = $this->userprof->getUserDetails($user);

            $data['details'] = $details;

            //start of iruka's part
            $mem = $this->userprof->memDetails($user);
            $data['mem'] = $mem;
            $count = $this->userprof->SubCount($user);

            $data['count'] = $count;
//           echo ($count);
            $x= $this->userprof->memType($user);
            $data['x']=$x;
            //ends of iruka's part


            $this->load->view('templates/header');
            $this->load->view('profile1', $data);
            $this->load->view('templates/footer');
        }



    }

}