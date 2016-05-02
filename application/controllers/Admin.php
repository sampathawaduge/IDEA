<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }

    public function index()
    {

            $this->load->view('templates/header');
            $this->load->view('Admin_panel');
            $this->load->view('templates/footer');


    }
    public function show()
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
    public function displaySubmissions()
    {
        $this->load->model('submission');
        $result=$this->submission->get_submissions();
        echo "<table class=\"table table-bordered\">".
                "<thead>".
                    "<tr>".
                        "<th>SubmissionID</th>".
                        "<th>SubmissionDate</th>".
                        "<th>SubmissionTime</th>".
                        "<th>SubmissionTime</th>".
                        "<th>SubmissionUser</th>".
                        "<th>Description</th>".
                        "<th>UserCategory</th>".
                    "</tr>".
                "</thead>".
            "</table>";
    }


}