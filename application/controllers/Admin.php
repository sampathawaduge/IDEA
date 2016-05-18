<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('email');
    }

    public function index()
    {

            $this->load->view('templates/header');
            $this->load->view('Admin_panel');
            $this->load->view('templates/footer');

    }
    public function Submission()
    {
        $this->load->model('submission');
        $result=$this->submission->get_submissions();
        $data['sub']=$result;

        $this->load->view('templates/header');
        $this->load->view('Admin_submissions',$data);
        $this->load->view('templates/footer');
    }
    public function Comments()
    {
        $this->load->model('view_comment');
        $resul=$this->view_comment->viewallcomments();
        $data['com']=$resul;

        $this->load->view('templates/header');
        $this->load->view('Admin_comment',$data);
        $this->load->view('templates/footer');
    }
    public function Users()
    {
        $this->load->model('userprof');
        $result=$this->userprof->getallusers();
        $data['users']=$result;

        $this->load->view('templates/header');
        $this->load->view('Admin_users',$data);
        $this->load->view('templates/footer');
        
    }
    public function showcharts()
    {
        $this->load->model('view_comment');
        $this->load->model('submission');
        $this->load->model('userprof');

        $submission_count=$this->submission->submission_count();
        $comment_count=$this->view_comment->count_comments();
        $users=$this->userprof->count_users();

        $data=array("subcount"=>$submission_count,"comcount"=>$comment_count,"usercount"=>$users);
        echo json_encode($data);
        
    }
    public function categories()
    {
        $this->load->model('Get_categories_model');
        $result = $this->Get_categories_model->getallcategories();
        $data['categories'] = $result;

        $this->load->view('templates/header');
        $this->load->view('Admin_categories', $data);
        $this->load->view('templates/footer');
    }
}