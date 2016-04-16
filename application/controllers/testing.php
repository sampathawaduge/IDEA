<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/13/2016 AD
 * Time: 8:18 AM
 */
    class testing extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }
        public function index()
        {
            $this->load->view('testing');
        }

    }