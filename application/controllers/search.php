<?php

/**
 *
 */
class Search extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');


    }

    public function index(){
        if (empty($this->session->userdata['username'])) {
            redirect(site_url('login'));
        } else {

            // $data['submissions']=$this->search_model->get_results();
            $this->load->view('templates/header');
            $this->load->view('search_view');
            $this->load->view('templates/footer');
        }
    }

    // public function search_keyword(){
    // 	$keyword=$this->input->post('keyword');
    // 	$data['sub']=$this->search_model->get_search($keyword);
    // 	$data['main_view']="results";

    // 	 $this->load->view('layouts/main',$data);

    // }

    function search_keyword()
    {
        $keyword= $this->input->post('keyword');

        $this->load->model('search_model');
        $data['result']= $this->search_model->search($keyword);

        $this->load->view('templates/header');
        $this->load->view('search_view',$data);
        $this->load->view('templates/footer');

    }
}
?>