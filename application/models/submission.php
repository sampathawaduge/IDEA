<?php

class submission extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function insert_submission($val)
    {
        if($this->db->insert('tbl_Submissions',$val))
        {
            echo true;
        }
    }
    public function student_subcategories($user)
    {
        $sql="select * from tbl_User where name = ?";
        $query=$this->db->query($sql,array($user));
        $ans=$query->row();


        $result=$this->db->query("select * from tbl_Submission_Category where type_id like '".$ans->category."'");
        $data=$result->result();
        return $data;
    }
    public function get_submissions()
    {
        $submission=$this->db->get('tbl_Submissions');
        $data=$submission->result();
        return $data;
    }


}
?>