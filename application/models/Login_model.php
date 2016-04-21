<?php
///**
// * Created by PhpStorm.
// * User: AppleFactory
// * Date: 4/2/2016 AD
// * Time: 11:05 AM
// */
//
//class login_model extends CI_Model
//{
//    function __construct()
//    {
//        // Call the Model constructor
//        parent::__construct();
//    }
//
//    /*get the username & password from table_user which is equavalent to the
//    values passed from the login_controller*/
//    function get_user($usr, $pwd)
//    {
//        $sql = "select * from table_users where name = '" . $usr . "' and password = '" . $pwd . "'";
//        $query = $this->db->query($sql);
//        return $query->result();
//    }
//
//
//}
//
class login_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get the username & password from tbl_usrs
    function get_user($usr, $pwd)
    {
        $sql = "select * from table_users where name = '" . $usr . "' and password = '" . $pwd . "'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }


}
?>
