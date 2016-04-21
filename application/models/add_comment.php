<?php

class Add_comment extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function insert_comment($val)
    {
        if($this->db->insert('table_comment',$val))
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