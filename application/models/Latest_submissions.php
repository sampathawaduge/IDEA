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
          $sql = "select * from `table_submission` where `submission_user` ='".$user."'";
          $query = $this->db->query($sql);
          return $query->result();
    }
    function getusercategory($user)
    {
        $this->db->select('category');
        $this->db->from('table_users');
        $this->db->where('name', $user);
        $details = $this->db->get();
        return $details->result();
    }
    function getcategorynames($category)
    {
        $this->db->select('user_category');
        $this->db->from('table_category');
        $this->db->where('user_type', $category);
        $details = $this->db->get();
        return $details->result();
    }
    function getsubmissions($categories)
    {
        if($categories)
            {
                $no=0;
            foreach ($categories as $val)
            {
                $data[$no]=$val->user_category;
                $no++;
            }

            $sql="select * from `table_submission` where `user_category` in ('".$data[0]."','".$data[1]."','".$data[2]."')";
            $details = $this->db->query($sql);
            return $details->result();
        }

    }
    



}