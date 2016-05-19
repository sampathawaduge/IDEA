<?php
class Delete_submission_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }
    public function delete()
    {
        $id=$this->input->post('id');
        
        $this->load->model('Delete_submission_model');
        echo $this->Delete_submission_model->delete($id);

    }
    public function delete_com()
    {
        $id=$this->input->post('id');

        $this->load->model('Delete_comment_model');
        echo $this->Delete_comment_model->delete($id);
    }
    

}