<?php
class vote_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function update_vote($array,$submissionid,$commentid,$user,$vote)
    {
        $sql1="select * from table_comment_vote where sub_id=$submissionid and comment_id=$commentid and vote_status=1 and user like '$user'";
        $query1=$this->db->query($sql1);

        $sql2="select * from table_comment_vote where sub_id=$submissionid and comment_id=$commentid and vote_status=0 and user like '$user'";
        $query2=$this->db->query($sql2);

        if($vote==1) {
            if ($query1->num_rows() > 0) {
                echo "<script type='text/javascript'>alert('you have already voted!');";
                echo 'window.location.href="http://localhost:81/IDEA/index.php/comment/show/' . $submissionid . '/' . $commentid . '"</script>';
            }
            else if($query2->num_rows() > 0){
                $sql3="update table_comment_vote set vote_status=1 where sub_id=$submissionid and comment_id=$commentid and user like '$user'";
                $this->db->query($sql3);
                echo "<script type='text/javascript'>alert('you have successfully change your vote!');";
                echo 'window.location.href="http://localhost:81/IDEA/index.php/comment/show/' . $submissionid . '/' . $commentid . '"</script>';

            } else {
                return $this->db->insert('table_comment_vote', $array);
            }
        }
        if($vote==0) {
            if ($query2->num_rows() > 0) {
                echo "<script type='text/javascript'>alert('you have already voted!');";
                echo 'window.location.href="http://localhost:81/IDEA/index.php/comment/show/' . $submissionid . '/' . $commentid . '"</script>';
            }
            else if($query1->num_rows() > 0){
                $sql4="update table_comment_vote set vote_status=0 where sub_id=$submissionid and comment_id=$commentid and user like '$user'";
                $this->db->query($sql4);
                echo "<script type='text/javascript'>alert('you have successfully change your vote!!');";
                echo 'window.location.href="http://localhost:81/IDEA/index.php/comment/show/' . $submissionid . '/' . $commentid . '"</script>';

            } else {
                return $this->db->insert('table_comment_vote', $array);
            }
        }
    }

    function show_up($submissionid,$commentid)
    {
        $sql="select count(*) as up_vote_count from table_comment_vote where sub_id=$submissionid and comment_id=$commentid and vote_status = 1";
        $query=$this->db->query($sql);
        $result = $query->result();
        return $result;

    }

    function show_down($submissionid,$commentid)
    {
        $sql="select count(*) as down_vote_count from table_comment_vote where sub_id=$submissionid and comment_id=$commentid and vote_status = 0";
        $query=$this->db->query($sql);
        $result = $query->result();
        return $result;

    }

}
?>