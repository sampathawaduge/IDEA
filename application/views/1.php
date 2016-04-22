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
                            <li><a href="<?php echo site_url('/search')?>"><i class="fa fa-eye"></i>Search<span class="fa fa-chevron-right"></span></a>
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


                        


                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
            <p>Click on description to comment</p>
            <ul class='messages'>
                                <?php
                                if($submissions) {
                                    foreach ($submissions as $submission) {
                                        echo "<li>";
                                        echo "<img src='" . base_url('assets/images1/img.jpg') . "' class='avatar' alt='Avatar'>";
                                        echo "<div class='message_date'>";
                                        echo "<h3 class='date text-info'>$submission->submission_time</h3>";
                                        echo " <p class='month'>$submission->submission_date</p>";
                                        echo "</div>";
                                        echo "<div class='message_wrapper'>";
                                        echo "<p class='url'>";
                                        echo "<h4 class='heading'>$submission->submission_user.</h4>";
                                        echo "<a href='" . site_url('/comment/show/' . $submission->submission_id) . "'>";
                                        echo "<blockquote class='message'>$submission->description</blockquote>";
                                        echo "</a>";
                                        echo "</p>";
                                        echo "</br>";
                                        echo "<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\">Like</i>";
                                        echo "<i style=\"margin-left: 30px;\" class=\"fa fa-thumbs-down\" aria-hidden=\"true\">Dislike</i>";
                                        echo "</div>";
                                        echo "</li>";

                                    }
                                }
                                ?>
              </ul>


        </div>

    </div>
</div>