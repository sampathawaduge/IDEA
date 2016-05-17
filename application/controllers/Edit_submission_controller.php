<?php

class Edit_submission_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }
    public function edit()
    {
        $comment=$this->input->post('comment');
        $date=$this->input->post('date');
        $minutes=$this->input->post('min');
        $subid=$this->input->post('id');

        $array=[
            'submission_date'=>$date,
            'submission_time'=>$minutes,
            'description'=>$comment
        ];
        $this->load->model("Edit_submission_model");
        echo $this->Edit_submission_model->update($array,$subid);
        
    }
    public function edit_comment()
    {
        $comment=$this->input->post('comment');
        $date=$this->input->post('date');
        $minutes=$this->input->post('min');
        $comid=$this->input->post('id');

        $array=[
            'comment_date'=>$date,
            'comment_time'=>$minutes,
            'comment'=>$comment
        ];
        $this->load->model("Edit_comment_model");
        echo $this->Edit_comment_model->update($array,$comid);
    }

}