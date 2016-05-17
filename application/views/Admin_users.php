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
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a href="<?php echo site_url('/Admin');?>"><i class="fa fa-home"></i>Graphs<span class="fa fa-chevron-right"></span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/Admin/Submission');?>"><i class="fa fa-home"></i>Submissions<span class="fa fa-chevron-right"></span></a>
                            </li>
                            <li><a href="<?php echo site_url('/Admin/Comments');?>"><i class="fa fa-edit"></i>Comments<span class="fa fa-chevron-right"></span></a>
                            </li>
                            <li ><a href="<?php echo site_url('/Admin/Users');?>"><i class="fa fa-desktop"></i> Users <span class="fa fa-chevron-down"></span></a>
                            </li>
                            <li ><a href="<?php echo site_url('/Admin/categories');?>"><i class="fa fa-desktop"></i>Edit Categories<span class="fa fa-chevron-down"></span></a>
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
                                <img src="<?php echo base_url('assets/images1/img.jpg')?>" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
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

            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>Occupation</th>
                        <th>TelephoneNo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($users as $item)
                        {
                            echo "<tr>
                            <td>".$item->name."</td>
                            <td>".$item->email."</td>
                            <td>".$item->category."</td>
                            <td>".$item->occupation."</td>
                            <td>".$item->telephone."</td>
                            <td><i class=\"fa fa-search\" aria-hidden=\"true\"></i></td>
                           <td><input type=\"button\" class=\"btn btn-primary Deleteuser\" email=$item->email value=\"Delete\" ></td>
                            </tr>";
                        }
                    ?>
                     </tbody>
                </table>
            </div>


        </div>
    </div>
</div>