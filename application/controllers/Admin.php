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
        $result=$this->Get_categories_model->getallcategories();
        $data['categories']=$result;

        $this->load->view('templates/header');
        $this->load->view('Admin_categories',$data);
        $this->load->view('templates/footer');
    }
   // public function controll_submissions()
//    {
////        $this->load->view('templates/header');
////        $this->load->view('Admin_submissions');
////        $this->load->view('templates/footer');
//        echo "ok";
//    }
//    public function displaySubmissions()
//    {
//        $this->load->model('submission');
//        $result=$this->submission->get_submissions();
//        $data['sub']=$result;
//
//        $this->load->view('templates/header');
//        $this->load->view('Admin_panel',$data);
//        $this->load->view('templates/footer');
//
////        $tbl='';
////        $tbl.='<table class="table table-striped table-responsive" id="tableSortableRes">
////                               <thead>
////                                   <tr>
////                                       <th>SubmissionId</th>
////                                       <th>SubmissionDate</th>
////                                       <th>SubmissionTime</th>
////                                       <th>SubmissionUser</th>
////                                       <th>UserCategory</th>
////                                       <th>Description</th>
////
////                                   </tr>
////                               </thead>
////                               <tbody>';
////        foreach ( $result as $item) {
////            $tbl.='<tr class="gradex">
////                        <td id="kk">'.$item->submission_id.'</td>
////                        <td>'.$item->submission_date.'</td>
////                        <td>'.$item->submission_time.'</td>
////                        <td>'.$item->submission_user.'</td>
////                        <td>'.$item->user_category.'</td>
////                        <td><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></td>
////                       <td><a href="#" style="color:blue">DELETE</a></td>
////                    </tr>';
////        }
////        $tbl.='</tbody></table>';
////        echo $tbl;
//        
//
//    }
//
//    public function displayComments()
//    {
//        $this->load->model('view_comment');
//        $resul=$this->view_comment->viewallcomments();
//
//        $tbl='';
//        $tbl.='<table class="table table-striped table-responsive" id="tableSortableRes">
//                               <thead>
//                                   <tr>
//                                       <th>SubmissionId</th>
//                                       <th>CommentID</th>
//                                       <th>CommentDate</th>
//                                       <th>CommentTime/th>
//                                       <th>CommentUser</th>
//                                       <th>Comment</th>
//                                       
//                                   </tr>
//                               </thead>
//                               <tbody>';
//        foreach ($resul as $item){
//            $tbl.='<tr class="gradex">
//                        <td>'.$item->submission_id.'</td>
//                        <td>'.$item->comment_id.'</td>
//                        <td>'.$item->comment_date.'</td>
//                        <td>'.$item->comment_time.'</td>
//                        <td>'.$item->comment_user.'</td>
//                        <td><i class="fa fa-search" aria-hidden="true"></i></td>
//                       <td><input type="button" class="btn btn-primary" value="Delete" id="lap"></td>
//                    </tr>';
//        }
//        $tbl.='<tbody></tbody>';
//        echo $tbl;
//
//
//    }
//    public function displayusers()
//    {
//        $this->load->model('userprof');
//        $result=$this->userprof->getallusers();
//
//        $tbl='';
//        $tbl.='<table class="table table-striped table-responsive" id="tableSortableRes">
//                               <thead>
//                                   <tr>
//                                       <th>Name</th>
//                                       <th>Email</th>
//                                       <th>Category</th>
//                                       <th>Occupation</th>
//                                       <th>TelephoneNo</th>   
//                                   </tr>
//                               </thead>
//                               <tbody>';
//        foreach ($result as $item){
//            $tbl.='<tr class="gradex">
//                        <td>'.$item->name.'</td>
//                        <td>'.$item->email.'</td>
//                        <td>'.$item->category.'</td>
//                        <td>'.$item->occupation.'</td>
//                        <td>'.$item->telephone.'</td>
//                        <td><i class="fa fa-search" aria-hidden="true"></i></td>
//                       <td><input type="button" class="btn btn-primary" value="Delete" id="lap"></td>
//                    </tr>';
//        }
//        $tbl.='<tbody></tbody>';
//        echo $tbl;
//    }
//    
//
//

}