<div class="container body" xmlns="http://www.w3.org/1999/html">


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
                            <li><a href="<?php echo site_url('/Login_controller/mainpage')?>"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="<?php echo site_url('/user_profile')?>"><i class="fa fa-user" ></i> User Profile <span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('/add_submission')?>"><i class="fa fa-folder"></i>Add Submission<span class="fa fa-chevron-right"></span></a>
                                <ul class="nav child_menu" style="display: none">

                                </ul>
                            </li>
                            <li><a><i class="fa fa-folder"></i> FAQ <span class="fa fa-chevron-right"></span></a>
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
                                <?php echo $this->session->userdata['username'] ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li><a href="<?php echo site_url('/userprof')?>">  Profile</a>
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


                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            </br>
            </br>
            </br>
            </br>



                <div class="x_panel ">

                    <form class="form-inline" role="search" action=" <?php echo base_url(); ?>index.php/search/search_keyword" method = "post">
                        <div class="form-group">
<!--                            <label for="email">Search:</label>-->
                            <input type="text" class="form-control" placeholder="Type to Search" name = "keyword"size="100px; ">

                            <button class="btn-lg btn-success " type="submit" value = "Search" name="s"> <i class="glyphicon glyphicon-search"></i>Search</button>
                        </div>

<!--                        <div class="form-group">-->
<!--                            <label for="sel1">Category:</label>-->
<!--                            <select class="form-control" name="cat">-->
<!--                                <option value="one">All</option>-->
<!--                                <option value="two">Administration</option>-->
<!--                                <option value="Facilities">Facilities</option>-->
<!--                                <option value="four">Sports</option>-->
<!--                                <option value="five">Academic</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class=" group">-->
<!--                            <label for="sel1">views:</label>-->
<!--                            <select class="form-control" id="sel1">-->
<!--                                <option value="1">10+</option>-->
<!--                                <option value="2">50+</option>-->
<!--                                <option value="3">100+</option>-->
<!--                            </select>-->
<!--                        </div>-->


                    </form>
            </div>






<!--            --><?php
//            if(isset($result)){
//                echo "<ul class='list-group'>";
//                foreach ($result  as $row){
//                    echo  "<li class='list-group-item'>".$row->submission_user."</li>";
//                    echo "<li class='list-group-item'>".$row->submission_user."</li>";
//                    echo  "<li class='list-group-item'>".$row->description."</li>";
//
//                }
//                echo "</ul>";
//
//
//
//            }else{
//                echo "no record found";
//            }
//
//            ?>


            <div class="profile_title">
                <div class="col-md-12">
                    <h2>Search Results</h2>
                    </br>
                    </br>

                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class='messages'>
                                <?php

                                    if (isset($result)) {
                                        foreach ($result as $row) {

                                            echo "<ul>";
                                            echo "<li>";
                                            echo "<img src='" . base_url('assets/images1/img.jpg') . "' class='avatar' alt='Avatar'>";
                                            echo "<div class='message_date'>";
                                            echo "<h3 class='date text-info'>" . $row->submission_time . "</h3>";
                                            echo " <p class='month'>" . $row->submission_date . "</p>";
                                            echo "</div>";
                                            echo "<div class='message_wrapper'>";
                                            echo "<p class='url'>";
                                            echo "<h4 class='heading'>" . $row->submission_user . "</h4>";
                                            echo "<div class='link'><blockquote class='message'>" . $row->description . "</blockquote></div>";
                                            echo "</p>";
                                            echo "</br>";
                                            echo "</div>";


                                            echo "</li>";
                                            echo "</ul>";

                                        }
                                    } else {
//                                              echo "<h3>no record found</h3>";
                                        echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>";
//                  echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>";
//                 echo "</button>";
                                        echo "<strong>No Results</strong>";
                                        echo "</div>";


                                }
                                ?>

                            </ul>
                            <!-- end recent activity -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

