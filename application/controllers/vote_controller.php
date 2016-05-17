<?php

class vote_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

    }

    public function upvote()
    {
            $submissionid = $this->uri->segment(3);
            $vote = $this->uri->segment(6);
            $commentid = $this->uri->segment(4);
            $user = $this->uri->segment(5);


            $array = [
                'sub_id' => $submissionid,
                'user' => $user,
                'comment_id' => $commentid,
                'vote_status' => $vote

            ];

            $this->load->model("vote_model");
            if($this->vote_model->update_vote($array, $submissionid, $commentid, $user, $vote))
            {
//                redirect("http://localhost:81/IDEA/index.php/comment/show/$submissionid/$commentid");
                redirect(base_url('/index.php/comment/show/$submissionid/$commentid'));
            }



    }

    public function downvote()
    {
        $submissionid=$this->session->userdata['subbid'];
        $vote=$this->button->post('dislike');
        $commentid=2;
        $user=$this->session->userdata['username'];


        $array2=[
            'sub_id'=>$submissionid,
            'user'=>$user,
            'comment_id'=>$commentid,
            'vote_status'=>$vote

        ];

        $this->load->model("vote_model");
        $this->vote_model->update_vote($array2,$submissionid,$commentid,$user);


    }
    
    public function show_vote(){
        $submissionid=$this->session->userdata['subbid'];
        $commentid=2;


        $array=[
            'sub_id'=>$submissionid,
            'comment_id'=>$commentid,

        ];

        $this->load->model("vote_model");
        $data = $this->vote_model->show_up($array,$submissionid,$commentid);

        $this->load->view('templates/header');
        $this->load->view('comment',$data);
        $this->load->view('templates/footer');

    }
}
?>