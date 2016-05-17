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
                            <li><a href="<?php echo site_url('/Admin/Users');?>"><i class="fa fa-desktop"></i> Users <span class="fa fa-chevron-down"></span></a>
                            </li>
                            <li><a href="<?php echo site_url('/Admin/categories');?>"><i class="fa fa-desktop"></i>Edit Categories <span class="fa fa-chevron-down"></span></a>
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
            <input type="button" class="btn btn-primary add"  value="+Add" >
            <table class="table">
                <thead>
                <tr>
                    <th>User Type</th>
                    <th>User Category</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    <?php

                        foreach ($categories as $items) {
                            echo "<tr>" .
                                "<td>" . $items->user_type. "</td>
                            <td>" . $items->user_category. "</td>
                            <td><input type=\"button\" class=\"btn btn-primary edittcat\"  usertype=\"$items->user_type\" usercat=\"$items->user_category\" value=\"Edit\" ></td>
                            <td><input type=\"button\" class=\"btn btn-primary deletecat\" usertype=\"$items->user_type\" usercat=\"$items->user_category\" value=\"Delete\" ></td>
                            
                            </tr>";

                            echo "<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">";
                            echo "<div class=\"modal-dialog\">";
                            echo "<div class=\"modal-content\">";
                            echo "<div class=\"modal-header\">";
                            echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
                            echo "<h4 class=\"modal-title\">Submission</h4>";
                            echo "</div>";
                            echo "<div class=\"modal-body\">";

                            echo "<div class='form-group'>";
                            echo "<label for='pwd''>User Category</label>";
                            echo "<input type='text' class='form-control'  id='category'>";
                            echo "</div>";


                            echo "</div>";
                            echo "<div class=\"modal-footer\">";
                            echo "<input style='margin-top:8px;' type='button'  class='btn btn-default catedit' value='Edit'>";
                            echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>
                </tbody>
            </table>
            <?php
            echo "<div class=\"modal fade\" id=\"addmodel\" role=\"dialog\">";
            echo "<div class=\"modal-dialog\">";
                echo "<div class=\"modal-content\">";
                    echo "<div class=\"modal-header\">";
                        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
                        echo "<h4 class=\"modal-title\">Submission</h4>";
                        echo "</div>";
                    echo "<div class=\"modal-body\">";

                        echo "<div class='form-group'>";
                            echo "<label for='pwd''>User Category</label>";
                            echo "<input type='text' class='form-control'  id='usertype'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                            echo "<label for='pwd''>User Category</label>";
                            echo "<input type='text' class='form-control'  id='usercategory'>";
                        echo "</div>";


            echo "</div>";
                    echo "<div class=\"modal-footer\">";
                        echo "<input style='margin-top:8px;' type='button' class='btn btn-default addcat' value='Add' id='update'>";
                        echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            ?>




    </div>
    </div>
</div>