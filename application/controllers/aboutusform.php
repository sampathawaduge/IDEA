<?php

/**
 * Created by PhpStorm.
 * User: Udara Indeewarie
 * Date: 28-May-16
 * Time: 9:58 PM
 */
class aboutusform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));

    }


    public function index()
    {
        $this->load->view('aboutus_view');
    }
}