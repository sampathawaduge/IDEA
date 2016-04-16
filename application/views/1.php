<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo site_url('Login_controller/mainpage')?>" class="site_title"><i class="fa fa-bolt"></i> <span>IDEA World</span></a>
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
                <br>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <?php
                        echo '<h3>';
                        foreach ($user as $category)
                        {
                            echo $category->category;
                        }
                        echo '</h3>';
                        ?>
                        <ul class="nav side-menu">


                            </li>
                            <li><a href="<?php echo site_url('/user_profile')?>"><i class="fa fa-user" ></i> User Profile <span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('/add_submission')?>"><i class="fa fa-folder"></i>Add Submission<span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>
                            <li><a><i class="fa fa-eye"></i> About Us<span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>
                            </li>
                            <li><a><i class="fa fa-flag-o"></i> Site Map<span class="fa fa-chevron-right"></span></a>
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
                                <?php
                                    echo $this->session->userdata['username'];
                                ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li><a href="<?php echo site_url('/User_profile')?>">Profile</a>
                                </li>
                                <li><a href="<?php echo site_url('/Login_controller/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>


                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">5</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                <li>
                                    <?php
                                    foreach ($working as $item) {

                                        echo "<a>";

//                                        echo "<img src=".base_url('assets/images1/img.jpg')."alt='Profile Image' />";
                                        echo "<span class='image'><img src='".base_url('assets/images1/img.jpg')."'/></span>";
                                        echo "<span>";
                                        echo "<span>".$item->submission_user."</span>";
                                        echo "<span class='time'>".$item->submission_time."</span>";
                                        echo "</span>";
                                        echo "<span class='message'>";
                                        echo $item->description;
                                        echo "</span>";
                                        echo "</a>";

                                    }

                                    ?>
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
            

        </div>

