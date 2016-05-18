<?php
////class userprof extends CI_Model{
////    public function __construct()
////    {
////        parent::__construct();
////    }
////
////    public function getSubmissions($user)
////    {
////
////        $this->db->select('*');
////        $this->db->from('table_submission');
////        $this->db->where('submission_user', $user);
////        $subs = $this->db->get();
////        return $subs->result();
////    }
////
////    public function getUserDetails($user)
////    {
////
////        $this->db->select('*');
////        $this->db->from('table_users');
////        $this->db->where('name', $user);
////        $details = $this->db->get();
////        return $details->result();
////    }
////
////
////
////}
////
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
//    //iruka's part
//    public function memDetails($user)
//    {
//
//        $this->db->select('*');
//        $this->db->from('table_mem_details');
//        $this->db->where('id', $user);
//        $mem = $this->db->get();
//        return $mem->result();
//    }
//    //iruka's part
//    function SubCount($user)
//    {
//
////        $this->db->select_sum('submission_id');
////
////        $this->db->from('table_submission');
////
////        $this->db->where('submission_user', $user);
////
////        $query = $this->db->get();
////
////        $count = $query->row()->submission_id;
//        $this->db->like('submission_user', $user);
//        $this->db->from('table_submission');
//        $count= $this->db->count_all_results();
//
//
//
//        if ($count > 0)
//        {
//
//            return $count;
//
//        }
//
//        return NULL;
//
//    }
//    //iruka's part
//    function memType($user){
//        $this->db->like('submission_user', $user);
//        $this->db->from('table_submission');
//        $x= $this->db->count_all_results();
//
//
//
//        if($x>=100){
//            $data = array(
//                'mem_type' => 'Platinum Member',
//
//            );
//
//            $this->db->where('id', $user);
//            $r= $this->db->update('table_mem_details', $data);
//            return $r;
//
//        }
//        else if ($x >=50 ){
//
//            $data = array(
//                'mem_type' => 'Gold Member',
//
//            );
//
//            $this->db->where('id', $user);
//            $r= $this->db->update('table_mem_details', $data);
//            return $r;
//        }
//        else if ($x >=25 ){
//
//            $data = array(
//                'mem_type' => 'Silver Member',
//
//            );
//
//            $this->db->where('id', $user);
//            $r= $this->db->update('table_mem_details', $data);
//            return $r;
//        }
//        else {
//
//            $data = array(
//                'mem_type' => 'Bronze Member',
//
//            );
//
//            $this->db->where('id', $user);
//            $r= $this->db->update('table_mem_details', $data);
//            return $r;
//        }
//
//    }
//
//    public function addto_db($val,$mail)
//    {
//        $sql="select * from table_users";
//        $this->db->where('email',$mail);
//        return $this->db->update('table_users',$val);
//
//    }
//    public function count_users()
//    {
//        $sql="select count(*) as count from table_users";
//        $count=$this->db->query($sql);
//        foreach ($count->result() as $item)
//        {
//            return $item->count;
//        }
//    }

//
//
//
//
//}
//?>

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


    public function memDetails($user)
    {

        $this->db->select('*');
        $this->db->from('table_mem_details');
        $this->db->where('id', $user);
        $mem = $this->db->get();
        return $mem->result();
    }

    public function addto_db($val,$mail)
    {
        $sql="select * from table_users";
        $this->db->where('email',$mail);
        return $this->db->update('table_users',$val);

    }

    function SubCount($user)
    {

//        $this->db->select_sum('submission_id');
//
//        $this->db->from('table_submission');
//
//        $this->db->where('submission_user', $user);
//
//        $query = $this->db->get();
//
//        $count = $query->row()->submission_id;
        $this->db->like('submission_user', $user);
        $this->db->from('table_submission');
        $count= $this->db->count_all_results();



        if ($count > 0)
        {

            return $count;

        }

        return NULL;

    }
    function memType($user){
        $this->db->like('submission_user', $user);
        $this->db->from('table_submission');
        $x= $this->db->count_all_results();



        if($x>=100){
            $data = array(
                'mem_type' => 'Platinum Member',

            );

            $this->db->where('id', $user);
            $r= $this->db->update('table_mem_details', $data);
            return $r;

        }
        else if ($x >=50 ){

            $data = array(
                'mem_type' => 'Gold Member',

            );

            $this->db->where('id', $user);
            $r= $this->db->update('table_mem_details', $data);
            return $r;
        }
        else if ($x >=25 ){

            $data = array(
                'mem_type' => 'Silver Member',

            );

            $this->db->where('id', $user);
            $r= $this->db->update('table_mem_details', $data);
            return $r;
        }
        else {

            $data = array(
                'mem_type' => 'Bronze Member',

            );

            $this->db->where('id', $user);
            $r= $this->db->update('table_mem_details', $data);
            return $r;
        }

    }


    public function getmessages($user)
    {

        $this->db->select('*');
        $this->db->from('messagetest');
        $this->db->where('user', $user);
        $this->db->where('status', 'unread');
        $message = $this->db->get();

        // $row = $message->fetch_assoc();
        $count = $message->num_rows();
        //return $message->result();
        return $count;

        //  "SELECT * from messagetest where status = 'unread'"
    }


// getmessagedata

    public function getmessagedata($user)
    {

        $this->db->select('*');
        $this->db->from('messagetest');
        $this->db->where('user', $user);
        $this->db->where('status', 'unread');
        $message = $this->db->get();

        // $row = $message->fetch_assoc();
        //  $count = $message->num_rows();
        return $message->result();
        // return $count;

        //  "SELECT * from messagetest where status = 'unread'"
    }





    public function addpicto_db($val,$name)
    {
        $sql="select * from table_users where name = ?";
        $query=$this->db->query($sql,array($name));

        return $this->db->update('table_users',$val);



    }


    public function updatemsg_db($user)
    {
        //  $sql="select * from messagetest where user = $user";
        // $query=$this->db->query($sql);
        $data = 'read';
        $this->db->set('status',$data);
        $this->db->where('user',$user);
        return $this->db->update('messagetest');



//        $this->db->set('table_title',$data['title'])
//            ->where('table_id',$data['table_id'])
//            ->update('your_table');

    }
    public function insert($result)
    {
        $this->db->insert('messagetest',$result);
        return true;
    }
    public function getallusers()
    {
        $sql="select * from table_users";
        $result=$this->db->query($sql);
        $data=$result->result();
        return $data;
    }



}
?>
