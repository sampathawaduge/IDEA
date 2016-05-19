<?php
class Email extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $mail=$this->input->post('mail');
        $subject=$this->input->post('subject');
        $body=$this->input->post('body');

        $config=array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.gmail.com',
            'smtp_port'=>465,
            'smtp_user'=>'sampathawaduge94@gmail.com',
            'smtp_pass'=>'Pass123#'
        );
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");

        $this->email->from('sampathawaduge94@gmail.com');
        $this->email->to($mail);
        $this->email->subject($subject);
        $this->email->message($body);

        if($this->email->send())
        {
            echo $mail;
        }
        else
        {
            echo show_error($this->email->print_debugger());
        }

    }
}