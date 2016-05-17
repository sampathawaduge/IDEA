<?php
class Delete_user_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }
    public function delete_user()
    {
        $email=$this->input->post('email');

        $this->load->model('Delete_user_model');
        echo $this->Delete_user_model->delete($email);
    }
}