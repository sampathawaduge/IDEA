

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
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
                        <?php
                        echo '<h3>';
                        foreach ($details as $category)
                        {
                            echo $category->category;
                        }
                        echo '</h3>';
                        ?>
                        <ul class="nav side-menu">
                            <li><a href="<?php echo site_url('/Login_controller/mainpage')?>"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="<?php echo site_url('/user_profile')?>"><i class="fa fa-user" ></i> User Profile <span class="fa fa-chevron-right"></span></a>
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

            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>User Profile</h3>
                    </div>


                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">

                                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                                    <div class="profile_img">

                                        <!-- end of image cropping -->
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <div class="avatar-view" title="Change the avatar">
                                                <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="Avatar">
                                            </div>


                                            <!-- /.modal -->

                                            <!-- Loading state -->
                                            <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                        </div>
                                        <!-- end of image cropping -->

                                    </div>

                                    <!--name of the loged user-->
                                    <?php
                                    echo "<h3>".$this->session->userdata['username']."</h3>";
                                    ?>
                                    <!--name of the loged user-->

                                    <ul class="list-unstyled user_data">
                                        <?php
                                        foreach ($details as $data)
                                        {
                                            $name = $data->name;
                                            $email = $data->email;
                                            $occupation = $data->occupation;
                                            $telephone = $data->telephone;
                                            echo "<li><i class='fa fa-user user-profile-icon'></i>  ".$data->category."</li>";
                                            echo "<li><i class='fa fa-briefcase user-profile-icon'></i> ".$data->occupation ."</li>";
                                            echo "<li class='m-top-xs'><i class='fa fa-inbox user-profile-icon'></i> ".$data->email."</li>";

                                        }
                                        ?>



                                    </ul>

                                    <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Upload Profile Pictures</a>
                                    <br />

                                    <!-- start member type -->
                                    <?php
                                    foreach ($mem as $row) {
                                       echo "<h2 > . $row->mem_type  </h2 >";
                                    echo "<ul class='list-unstyled user_data'' >";
                                        echo "<li >";
                                            echo"<p > Membership Progress </p >";
                                        if ( $row->mem_type == 'Platinum Member'):
                                            echo "<div class='progress progress_sm'' >";
                                                echo "<div class='progress-bar bg-green' role = 'progressbar' data-transitiongoal = '100' ></div >";
                                            echo" </div >";
                                            echo "<span class=\"glyphicon glyphicon-king\" aria-hidden=\"true\"></span>";
                                            echo "<span class='glyphicon-class'><h4>King Award for 100 IDEAS.</h4></span>";

                                        elseif ($row->mem_type == 'Gold Member'):
                                            echo "<div class='progress progress_sm'' >";
                                            echo "<div class='progress-bar bg-green' role = 'progressbar' data-transitiongoal = '75' ></div >";
                                            echo" </div >";
                                            echo "<span class=\"glyphicon glyphicon-queen\" aria-hidden=\"true\"></span>";
                                            echo "<span class='glyphicon-class'><h4>Queen Award for 75 IDEAS.</h4></span>";
                                        elseif ($row->mem_type == 'Silver Member'):
                                            echo "<div class='progress progress_sm'' >";
                                            echo "<div class='progress-bar bg-green' role = 'progressbar' data-transitiongoal = '50' ></div >";
                                            echo" </div >";
                                            echo "<span class=\"glyphicon glyphicon-bishop\" aria-hidden=\"true\"></span>";
                                            echo "<span class='glyphicon-class'><h4>Bishop Award for 50 IDEAS.</h4></span>";
                                        elseif ($row->mem_type == 'Bronze Member'):
                                            echo "<div class='progress progress_sm'' >";
                                            echo "<div class='progress-bar bg-green' role = 'progressbar' data-transitiongoal = '25' ></div >";
                                            echo" </div >";
                                            echo "<span class=\"glyphicon glyphicon-knight\" aria-hidden=\"true\"></span>";
                                            echo "<span class='glyphicon-class'><h4>Knight Award for 25 IDEAS.</h4></span>";


                                        else:
                                            echo "<div class='progress progress_sm'' >";
                                            echo "<div class='progress-bar bg-green' role = 'progressbar' data-transitiongoal = '5' ></div >";
                                            echo" </div >";
                                            echo "<span class=\"glyphicon glyphicon-pawn\" aria-hidden=\"true\"></span>";
                                            echo "<span class='glyphicon-class'><h4>Pawn Award for 10 IDEAS.</h4></span>";

                                        endif;
                                        echo"</li >";

                                    echo "</ul >";
                                    }
                                    ?>
                                    <!-- end of member type -->

                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">

                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                                            <li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab1" data-toggle="tab" aria-expanded="false">Profile</a>
                                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Play Games</a>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content" >


                                            <div role="tabpanel" class="active tab-pane " id="tab_content1" aria-labelledby="profile-tab">
                                                <form id="myform1" class="form-horizontal form-label-left" novalidate method="post" action="<?php echo site_url('/user_profile/adduserdata')?>">

                                                    <span class="section">Personal Info</span>

                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" value="<?php echo $name ?>" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="email" id="email" name="email" value="<?php echo $email ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="occupation" type="text" name="occupation" value="<?php echo $occupation ?>"data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label for="password" class="control-label col-md-3">New Password</label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="tel" id="telephone" name="telephone" value="<?php echo $telephone ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-3">
                                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div role="tabpane2" class=" tab-pane " id="tab_content2" aria-labelledby="profile-tab">
                                                <span class="section">Available Games</span>



                                                <form id="myform1" class="form-horizontal form-label-left" novalidate method="post">
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Slither.io
                                                    </label>




                                                    <?php if ($count >='10'): ?>

                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <a href="http://slither.io/"class="btn btn-round btn-primary ">
                                                                <i class="fa fa-play"></i> Play
                                                            </a>
                                                        </div>

                                                        <?php else: ?>

                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <a href="http://slither.io/"class="btn btn-round btn-primary disabled ">
                                                                <i class="fa fa-play"></i> Play
                                                            </a>
                                                        </div>

                                                    <?php endif; ?>
                                                </div>

                                                </form>


                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- /page content -->
    </div>

</div>