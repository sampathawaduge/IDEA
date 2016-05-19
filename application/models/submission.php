<?php

class submission extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function insert_submission($val)
    {
        if($this->db->insert('table_submission',$val))
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }
    public function student_subcategories($user)
    {
        $sql="select * from table_users where name = ?";
        $query=$this->db->query($sql,array($user));
        $ans=$query->row();


        $result=$this->db->query("select * from table_category where user_type like '".$ans->category."'");
        $data=$result->result();
        return $data;
    }
    public function get_submissions()
    {
        $submission=$this->db->get('table_submission');
        $data=$submission->result();
        return $data;
    }
    public function submission_count()
    {
        $sql="select COUNT(*) as count from table_submission";
        $query=$this->db->query($sql);
        foreach ($query->result() as $item)
        {
            return $item->count;
        }
    }
    public function get_reported_submissions()
    {
        $submission=$this->db->get('table_reported_submissions');
        $data=$submission->result();
        return $data;
    }
    public function delete_reported_submissions($val)
    {
        $this->db->where('submission_id',$val);
        if($this->db->delete('table_reported_submissions'))
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }
    public function add_report($val)
    {
        if($this->db->insert('table_reported_submissions',$val))
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }
    public function insert_rating($val)
    {
        if($this->db->insert('table_vote',$val))
        {
            echo true;
        }
        else
        {
            echo false;
        }

    }



}
?>