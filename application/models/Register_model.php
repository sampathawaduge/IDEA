<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 1:32 PM
 */
class Register_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add_db($val,$mail)
    {
        $sql="select * from table_users where email = ?";
        $query=$this->db->query($sql,array($mail));
        if($query->num_rows()>0)
        {
            echo "You have already registered";
        }
        else
        {
            return $this->db->insert('table_users',$val);

        }


    }

    public function add_db2($val2){
        $this->db->insert('table_mem_details',$val2);
    }

}
