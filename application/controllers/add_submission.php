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
        if (empty($this->session->userdata['username'])) {
            redirect(site_url('login'));
        } else {

            $user = $this->session->userdata['username'];
            $this->load->model('submission');
            $this->load->model('userprof');
            $subs = $this->userprof->getSubmissions($user);

            $data['subs'] = $subs;
//            $data['user'] = $user;
////
            $details = $this->userprof->getUserDetails($user);
////
            $data['user'] = $details;
////
////
            $query = $this->submission->student_subcategories($user);
////            $sub = $this->submission->get_submissions();
            $data['test'] = $query;
////            $data['sub'] = $sub;
//
//
            $this->load->view('templates/header');
            $this->load->view('add_submission 2',$data);
            $this->load->view('templates/footer');

        }
    }

    public function show()
    {
        $comment=$this->input->post('comment');
        $subcat=$this->input->post('subcat');
        $date=$this->input->post('date');
        $minutes=$this->input->post('min');


        $array=[
            'submission_date'=>$date,
            'submission_time'=>$minutes,
            'submission_user'=>$this->session->userdata['username'],
            'description'=>$comment,
            'user_category'=>$subcat

        ];
        $this->load->model("submission");
        $this->submission->insert_submission($array);
        echo $comment;
    }
    public function star_rating()
    {
        $submissionID=$this->input->post('submission');
        $ratingID=$this->input->post('rating');
        $array=[
            'SubmissionID'=>$submissionID,
            'RatingID'=>$ratingID
        ];
        $this->load->model("submission");
        $this->submission->insert_rating($array);
    }

}