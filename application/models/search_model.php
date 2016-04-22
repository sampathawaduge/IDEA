<?php

class search_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }



    function search($keyword)

    {


            $sql = "SELECT * FROM table_submission WHERE description LIKE '%" .
                $this->db->escape_like_str($keyword) . "%'";

            $Q = $this->db->query($sql);
//        foreach ($Q-> result_array() as $row){
//
//        }
//        return $Q;

            $data = $Q->result();
            return $data;


    }
}
?>