<?php
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

      public function getmessages($user)
    {

        $this->db->select('*');
        $this->db->from('messageTest');
        $this->db->where('user', $user);
        $this->db->where('status', 'unread');
        $message = $this->db->get();

       // $row = $message->fetch_assoc();
        $count = $message->num_rows();
       //return $message->result();
        return $count;

      //  "SELECT * from messageTest where status = 'unread'"
    }


// getmessagedata

      public function getmessagedata($user)
    {

        $this->db->select('*');
        $this->db->from('messageTest');
        $this->db->where('user', $user);
        $this->db->where('status', 'unread');
        $message = $this->db->get();

       // $row = $message->fetch_assoc();
     //  $count = $message->num_rows();
        return $message->result();
           // return $count;

      //  "SELECT * from messageTest where status = 'unread'"
    }



    public function addto_db($val,$mail)
    {
        $sql="select * from table_users";
        $this->db->where('email',$mail);
        return $this->db->update('table_users',$val);



    }

      public function addpicto_db($val,$name)
    {
        $sql="select * from table_users where name = ?";
        $query=$this->db->query($sql,array($name));

        return $this->db->update('table_users',$val);
    


    }


    public function updatemsg_db($user)
    {
      //  $sql="select * from messageTest where user = $user";
       // $query=$this->db->query($sql);
        $data = 'read';
        $this->db->set('status',$data);
        $this->db->where('user',$user);
        return $this->db->update('messageTest');



//        $this->db->set('table_title',$data['title'])
//            ->where('table_id',$data['table_id'])
//            ->update('your_table');

    }


}
?>