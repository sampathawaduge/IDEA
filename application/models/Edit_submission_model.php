<?php

class Edit_submission_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function update($val,$id)
    {
        $this->db->where('submission_id',$id);
        if($this->db->update('table_submission',$val))
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