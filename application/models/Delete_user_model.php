<?php

class Delete_user_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function delete($val)
    {
        $this->db->where('email',$val);
        if($this->db->delete('table_users'))
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