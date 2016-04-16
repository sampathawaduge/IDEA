<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/9/2016 AD
 * Time: 11:37 PM
 */
class Latest_submissions extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get the username & password from tbl_usrs
    function get_latest($user)
    {
          $sql = "select * from `table_submission` where `submission_user` !='".$user."'"; 
          $query = $this->db->query($sql);
          return $query->result();
    }


}