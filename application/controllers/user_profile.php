<?php
class User_profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('form');

    }

    public function index()
    {
        if (empty($this->session->userdata['username'])) {
            redirect(site_url('login'));
        } else {
            $user = $this->session->userdata['username'];
            $this->load->model('userprof');

            $subs = $this->userprof->getSubmissions($user);

            $data['subs'] = $subs;
            $data['user'] = $user;

            $details = $this->userprof->getUserDetails($user);

            $data['details'] = $details;

            $mem = $this->userprof->memDetails($user);
            $data['mem'] = $mem;
            $count = $this->userprof->SubCount($user);

            $data['count'] = $count;
            //           echo ($count);
            $x= $this->userprof->memType($user);
            $data['x']=$x;





//            $this->load->view("profile", $data);
            $this->load->view('templates/header');
            $this->load->view('profiletest', $data);
            $this->load->view('templates/footer');


        }
    }

    public function adduserdata()
    {
        $username=$this->input->post('name');
        $email=$this->input->post('email');
        $occupation=$this->input->post('occupation');
        $password=$this->input->post('password');
        $telephone=$this->input->post('telephone');


        $array=[
            'name'=>$username,
            'email' => $email,
            'occupation' => $occupation,
            'password' => $password,
            'telephone' => $telephone,
        ];

        $this->load->model("userprof");

        if($this->userprof->addto_db($array,$email))
        {
            $this->load->model('userprof');

            $user = $this->session->userdata['username'];

            $details = $this->userprof->getUserDetails($user);

            $user = $this->session->userdata['username'];
            $this->load->model('userprof');

            $subs = $this->userprof->getSubmissions($user);

            $data['user'] = $details;
            $data['subs'] = $subs;
            $data['user'] = $user;

            $details = $this->userprof->getUserDetails($user);

            $data['details'] = $details;
            $mem = $this->userprof->memDetails($user);
            $data['mem'] = $mem;
            $count = $this->userprof->SubCount($user);

            $data['count'] = $count;
//           echo ($count);
            $x= $this->userprof->memType($user);
            $data['x']=$x;



            $this->load->view('templates/header');
            $this->load->view('profiletest', $data);
            $this->load->view('templates/footer');
        }



    }





    public   function uploadImage()

    {

        $config['upload_path']   =   "images/";

        $config['allowed_types'] =   "gif|jpg|jpeg|png";

        $config['max_size']      =   "5000";

        $config['max_width']     =   "1907";

        $config['max_height']    =   "1280";

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload())

        {

            //echo $this->upload->display_errors();
            //    echo "<script>
            // alert('.$this->upload->display_errors().');
//</script>" ;
            echo "<script>alert('YOU DID NOT CHOSE AN IMAGE');</script>";

            $user = $this->session->userdata['username'];
            $this->load->model('userprof');

            $subs = $this->userprof->getSubmissions($user);

            $data['subs'] = $subs;
            $data['user'] = $user;

            $details = $this->userprof->getUserDetails($user);
            $data['details'] = $details;

            $this->load->view('templates/header');
            $this->load->view('profiletest', $data);
            $this->load->view('templates/footer');

        }

        else

        {



            $finfo=$this->upload->data();

            $this->_createThumbnail($finfo['file_name']);

            $data['uploadInfo'] = $finfo;

            $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext'];

            // $this->load->view('upload_success',$data);

            // You can view content of the $finfo with the code block below

            echo '<pre>';



            echo '</pre>';


            $image =$data['thumbnail_name'];
            //   $image = $finfo['full_path'];

            $array=[
                'picture' => $image
            ];





            $this->load->model("userprof");
            $user = $this->session->userdata['username'];
            if($this->userprof->addpicto_db($array,$user))
            {
                $user = $this->session->userdata['username'];
                $this->load->model('userprof');

                $subs = $this->userprof->getSubmissions($user);

                $data['subs'] = $subs;
                $data['user'] = $user;

                $details = $this->userprof->getUserDetails($user);

                $data['details'] = $details;
                $mem = $this->userprof->memDetails($user);
                $data['mem'] = $mem;
                $count = $this->userprof->SubCount($user);

                $data['count'] = $count;
                //           echo ($count);
                $x= $this->userprof->memType($user);
                $data['x']=$x;
                $this->load->view('templates/header');
                $this->load->view('profiletest', $data);
                $this->load->view('templates/footer');
            }

        }

    }

    //Create Thumbnail function

    function _createThumbnail($filename)

    {

        $config['image_library']    = "gd2";

        $config['source_image']     = "images/" .$filename;

        $config['create_thumb']     = TRUE;

        $config['maintain_ratio']   = TRUE;

        $config['width'] = "80";

        $config['height'] = "80";

        $this->load->library('image_lib',$config);

        if(!$this->image_lib->resize())

        {

            echo $this->image_lib->display_errors();

        }

    }


    public function user_data_submit() {
        // echo "<script>alert('controller notif');</script>";
        // $user = $this->session->userdata['username'];
        $user = $this->session->userdata['username'];
        $this->load->model('userprof');
        $a = array();

        $count = $this->userprof->getmessages($user);

        $a['msg'] = $count;


        //      $this->load->model('nodes_m');
        // $data['ajax_req'] = TRUE;
        // $data['node_list'] = $this->nodes_m->get_node_by_type($_POST['type']);
        // $this->load->view('profile',$a);


        //Either you can print value or you can send value to database
        echo json_encode($a['msg']);
    }





    public function msg_data() {
        // echo "<script>alert('controller notif');</script>";
        // $user = $this->session->userdata['username'];
        $user = $this->session->userdata['username'];
        $this->load->model('userprof');
        $a = array();

        $message = $this->userprof->getmessagedata($user);

        //  $data['message'] = $message;


        //      $this->load->model('nodes_m');
        // $data['ajax_req'] = TRUE;
        // $data['node_list'] = $this->nodes_m->get_node_by_type($_POST['type']);
        // $this->load->view('profile',$a);


        //Either you can print value or you can send value to database
        echo json_encode($message);
    }




    public function msgread() {
        // echo "<script>alert('controller notif');</script>";
        // $user = $this->session->userdata['username'];
        $user = $this->session->userdata['username'];
        $this->load->model('userprof');


        if($this->userprof->updatemsg_db($user))
        {

            $user = $this->session->userdata['username'];
            $this->load->model('userprof');

            $subs = $this->userprof->getSubmissions($user);

            $data['subs'] = $subs;
            $data['user'] = $user;

            $details = $this->userprof->getUserDetails($user);

            $data['details'] = $details;

            $mem = $this->userprof->memDetails($user);
            $data['mem'] = $mem;
            $count = $this->userprof->SubCount($user);

            $data['count'] = $count;
            //           echo ($count);
            $x= $this->userprof->memType($user);
            $data['x']=$x;

            $this->load->view('templates/header');
            $this->load->view('profiletest', $data);
            $this->load->view('templates/footer');
        }


    }

}