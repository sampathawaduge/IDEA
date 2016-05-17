<?php
class Edit_category_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }
    public function edit_category()
    {
        $type=$this->input->post('type');
        $category=$this->input->post('category');
        $newcategory=$this->input->post('new');

        $this->load->model("Get_categories_model");
        $this->Get_categories_model->editcategories($type,$category,$newcategory);
    }
    public function deletecategory()
    {
        $type=$this->input->post('usertype');
        $category=$this->input->post('usercat');

        $this->load->model("Get_categories_model");
        $this->Get_categories_model->deletecategory($type,$category);

    }
    public function addcategory()
    {
        $type=$this->input->post('usertype');
        $category=$this->input->post('usercat');

        $this->load->model("Get_categories_model");
        $this->Get_categories_model->addcategory($type,$category);
    }
    
    
}