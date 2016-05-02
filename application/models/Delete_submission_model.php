<?php

class Delete_submission_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function delete($val)
    {
        $this->db->where('submission_id',$val);
        if($this->db->delete('table_submission'))
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