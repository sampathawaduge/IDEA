<?php
class add_submission extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }

    public function index()
    {
        if(empty($this->session->userdata['username']))
        {
            redirect(site_url('login'));
        }else {
            $this->load->model('submission');


            $user = $this->session->userdata['username'];
            $this->load->model('userprof');

            $subs = $this->userprof->getSubmissions($user);

            $data['subs'] = $subs;
            $data['user'] = $user;

            $details = $this->userprof->getUserDetails($user);

            $data['details'] = $details;


            $query = $this->submission->student_subcategories($this->session->userdata['username']);
            $sub = $this->submission->get_submissions();
            $data['test'] = $query;
            $data['sub'] = $sub;

            $this->load->view('templates/header');
            $this->load->view('add_submission', $data);
            $this->load->view('templates/footer');
        }




    }

    public function show()
    {
        $comment=$this->input->post('comment');
        $subcat=$this->input->post('subcat');


        $array=[
            'description'=>$comment,
            'submission_category'=>$subcat,
            'submission_user'=>$this->session->userdata['username']
        ];
        $this->load->model("submission");
        $this->submission->insert_submission($array);

    }

}