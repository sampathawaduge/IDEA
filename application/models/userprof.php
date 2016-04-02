<?php
class userprof extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSubmissions($user)
    {

        $this->db->select('*');
        $this->db->from('tbl_Submissions');
        $this->db->where('submission_user', $user);
        $subs = $this->db->get();
        return $subs->result();
    }

    public function getUserDetails($user)
    {

        $this->db->select('*');
        $this->db->from('tbl_User');
        $this->db->where('name', $user);
        $details = $this->db->get();
        return $details->result();
    }



}
?>