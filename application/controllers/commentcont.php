<?php

    class Comment extends CI_Controller
        {
            public function __construct()
            {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
            }
            public function show()
            {
                if(empty($this->session->userdata['username']))
                {
                    redirect(site_url('login'));
                }else {
                    $sub_id = $this->uri->segment(3);


                    $this->session->set_userdata(array('subbid' => $sub_id));

                    $this->load->model('view_comment');
                    $sub = $this->view_comment->view_sub($sub_id);
                    $com = $this->view_comment->view_comment($sub_id);

                    if($this->uri->segment(4)!=null) {
                        $com_id = $this->uri->segment(4);
                        $this->load->model("vote_model");
                        $up_count = $this->vote_model->show_up($sub_id, $com_id);
                        $down_count = $this->vote_model->show_down($sub_id, $com_id);
                        $data['up_count'] = $up_count;
                        $data['down_count'] = $down_count;
                    }
                    $data['sub'] = $sub;
                    $data['com'] = $com;


                    $this->load->view('templates/header');
                    $this->load->view('comment',$data);
                    $this->load->view('templates/footer');
                }

            }
            public function add_comment()
            {
                $comment=$this->input->post('comment');
                $date=$this->input->post('date');
                $minutes=$this->input->post('min');
                $submissionid=$this->session->userdata['subbid'];


                $array=[
                    'submission_id'=>$submissionid,
                    'comment_date'=>$date,
                    'comment_time'=>$minutes,
                    'comment_user'=>$this->session->userdata['username'],
                    'comment'=>$comment
                ];

                $this->load->model("Add_comment");
                $this->Add_comment->insert_comment($array);


            }
            



    }