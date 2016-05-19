<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

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
                            <li ><a href="<?php echo site_url('/Admin/Users');?>"><i class="fa fa-user" aria-hidden="true"></i> Users <span class="fa fa-chevron-down"></span></a>
                            </li>
                            <li ><a href="<?php echo site_url('/Admin/categories');?>"><i class="fa fa-desktop"></i>Edit Categories<span class="fa fa-chevron-down"></span></a>
                            </li>
                            <li ><a href="<?php echo site_url('/Admin/showreports');?>"><i class="fa fa-desktop"></i>Reports<span class="fa fa-chevron-down"></span></a>
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
                                Admin
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
                            <td><i class=\"fa fa-envelope mail\" aria-hidden=\"true\" email=".$item->email."></i></td>
                           <td><input type=\"button\" class=\"btn btn-primary Deleteuser\" email=$item->email value=\"Delete\" ></td>
                            </tr>";
                        }

                        echo "<div class=\"modal fade\" id=\"mailmodel\" role=\"dialog\">";
                        echo "<div class=\"modal-dialog\">";
                        echo "<div class=\"modal-content\">";
                        echo "<div class=\"modal-header\">";
                        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
                        echo "<h4 class=\"modal-title\">Submission</h4>";
                        echo "</div>";
                        echo "<div class=\"modal-body\">";
                        echo "<div class=\"form-group\">";
                        echo "<label for=\"subject\">Email Subject</label>";
                        echo "<input type=\"text\" class=\"form-control\" id=\"subject\">";
                        echo "</div>";
                        echo "<div class=\"form-group\">";
                        echo "<label for=\"body\">Email Body</label>";
                        echo "<textarea class='form-control' rows='5' id='body' style='resize: none'></textarea>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class=\"modal-footer\">";
                        echo "<button type=\"button\" class=\"btn btn-default\" id=\"sendmail\" data-dismiss=\"modal\">Send</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    ?>
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){

        $('.mail').click(function(){

            $("#mailmodel").modal();
//
            var mail=$(this).attr("email");
//
            $('#sendmail').click(function(){

                var subject=$("#subject").val();
                var body=$("#body").val();
                if(!subject & !body)
                {
                    console.log("fail");
                }
                else
                {
                    $.ajax({
                        url:"http://localhost:81/IDEA/index.php/Email",
                        type:"POST",
                        data:{mail:mail,subject:subject,body:body},
                        success:function(data){
                            if(data)
                            {
                                alert("Email Send Successfully");
                                location.reload();
                            }
                        }
                    })
                }

            })

        })
    })
</script>