<?php

class view_comment extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function view_sub($id)
    {
        $this->db->select('*');
        $this->db->from('table_submission');
        $this->db->where('submission_id',$id);
        $query = $this->db->get();

        $sub=$query->result();
        return $sub;
    }

    public function view_comment($variable)
    {
        $this->db->select('*');
        $this->db->from('table_comment');
        $this->db->where('submission_id',$variable);
        $query1 = $this->db->get();

        $sub1=$query1->result();
        return $sub1;
    }

    public function count_comments()
    {
        $sql="select count(*) as count from table_comment";
        $count=$this->db->query($sql);
        foreach ($count->result() as $item){
            return $item->count;
        }
    }
}
?>