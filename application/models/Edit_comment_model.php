<?php

class Edit_comment_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function update($val,$id)
    {
        $this->db->where('comment_id',$id);
        if($this->db->update('table_comment',$val))
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