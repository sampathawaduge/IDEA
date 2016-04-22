<?php
//class userprof extends CI_Model{
//    public function __construct()
//    {
//        parent::__construct();
//    }
//
//    public function getSubmissions($user)
//    {
//
//        $this->db->select('*');
//        $this->db->from('table_submission');
//        $this->db->where('submission_user', $user);
//        $subs = $this->db->get();
//        return $subs->result();
//    }
//
//    public function getUserDetails($user)
//    {
//
//        $this->db->select('*');
//        $this->db->from('table_users');
//        $this->db->where('name', $user);
//        $details = $this->db->get();
//        return $details->result();
//    }
//
//
//
//}
//
class userprof extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSubmissions($user)
    {

        $this->db->select('*');
        $this->db->from('table_submission');
        $this->db->where('submission_user', $user);
        $subs = $this->db->get();
        return $subs->result();
    }

    public function getUserDetails($user)
    {

        $this->db->select('*');
        $this->db->from('table_users');
        $this->db->where('name', $user);
        $details = $this->db->get();
        return $details->result();
    }

    public function addto_db($val,$mail)
    {
        $sql="select * from table_users";
        $this->db->where('email',$mail);
        return $this->db->update('table_users',$val);



    }



}
?>