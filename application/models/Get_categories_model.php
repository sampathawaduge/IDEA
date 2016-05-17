<?php

class Get_categories_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function getallcategories()
    {
        $categories=$this->db->get('table_category');
        $data=$categories->result();
        return $data;
    }
    public function editcategories($type,$category,$new)
    {
        $query="update table_category set user_category='".$new."' where user_type=? and user_category=?";
        echo $this->db->query($query,array($type,$category));

    }
    public function deletecategory($usertype,$usercateogry)
    {
        $sql="delete from table_category where user_type=? and user_category=?";
        echo $this->db->query($sql,array($usertype,$usercateogry));
    }
    public function addcategory($usertype,$usercateogry)
    {
        $sql="insert into table_category values('".$usertype."','".$usercateogry."')";
        echo $this->db->query($sql);
    }




}
?>