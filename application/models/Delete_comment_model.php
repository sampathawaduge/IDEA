<?php

class Delete_comment_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function delete($val)
    {
        $this->db->where('comment_id',$val);
        if($this->db->delete('table_comment'))
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