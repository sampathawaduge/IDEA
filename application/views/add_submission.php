<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-bolt"></i> <span>IDEA World</span></a>
                </div>
                <div class="clearfix"></div>


                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome</span>
                        <?php
                            echo "<h2>".$this->session->userdata['username']."</h2>";
                        ?>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="<?php echo site_url('/user_profile')?>"><i class="fa fa-user" ></i> User Profile <span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('/aboutusform')?>"><i class="fa fa-eye"></i> About Us<span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>

                            <li><a href="<?php echo site_url('/contactform')?>"><i class="fa fa-flag-o"></i>Contact Us<span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->


            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="">
                                <?php echo $this->session->userdata['username'] ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li><a href="javascript:;">  Profile</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">Help</a>
                                </li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            </br>
            </br>
            </br>    </br></br></br></br></br>

            <div id="summernote">
            <script>
                $(document).ready(function() {
                    $('#summernote').summernote({
                        height: 100,                 // set editor height
                        width:200,
                        minHeight: null,             // set minimum height of editor
                        maxHeight: null,             // set maximum height of editor
                        focus: true                  // set focus to editable area after initializing summernote
                    });
                });
            </script>
            </div>
            <!-- Split button -->
<!--            <div class="col-md-6">-->
            <div class="btn-group">
                <button type="button" class="btn btn-danger" id="btnStatus" >Select Category</button>
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">

            <?php

            foreach ($test as $key) {
                echo "<li>";
                echo "<a href='#'>".$key->category_name."</a>";
//               echo "<option value='.$key->category_name.'>".$key->category_name."</option>";
                       echo  "</li >";
                                }
            ?>
                </ul>
                </div>
<!--            </div>-->
<!--                <div class="col-md-6">-->


                <button type="button" class="btn btn-danger" id="idea_button">Add Submission</button>
<!--            </div>-->

            <div class="profile_title">
                <div class="col-md-6">
                    <h2>Submissions</h2>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <?php
                            echo "<ul class='messages'>";

                                echo "<li>";

                                    echo "<img src='assets/images1/img.jpg' class='avatar' alt='Avatar'>";

                                    foreach ($subs as $submission) {
                                        echo "<div class='message_date'>";
                                        echo "<h3 class='date text-info'>24</h3>";
                                        echo " <p class='month'>May</p>";
                                        echo "</div>";
                                        echo "<div class='message_wrapper'>";
                                        echo "<p class='url'>";
                                        echo "<h4 class='heading'>$submission->submission_user.</h4>";
                                        echo "<blockquote class='message'>$submission->description.</blockquote>";

                                        echo "</p>";
                                        echo "</br>";
                                        ;
                                        echo "</div>";


                               echo "</li>";

                                    }


                            echo "</ul>";
                            ?>
                            <!-- end recent activity -->

                        </div>
                </div>
                    </div>
                </div>






        </div>
