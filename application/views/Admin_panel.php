
<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">



                <!-- menu prile quick info -->
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <ul class="nav side-menu">
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
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Admin
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

            <div id="chart_div" style="margin-top:80px;"></div>

       </div>
     </div>
</div>
<script>
    $(document).ready(function(){
        $.ajax({
            type:"GET",
            url:"http://localhost:81/IDEA/index.php/Admin/showcharts",
            dataType:"text",
            success:function(data) {

                var obj = JSON.parse(data);
                var usercount = parseInt(obj.usercount);
                var subcount = parseInt(obj.subcount);
                var comcount = parseInt(obj.comcount);


                // Load the Visualization API and the corechart package.
                google.charts.load('current', {'packages': ['corechart']});

                // Set a callback to run when the Google Visualization API is loaded.
                google.charts.setOnLoadCallback(drawChart);

                // Callback that creates and populates a data table,
                // instantiates the pie chart, passes in the data and
                // draws it.
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        ['Users', usercount],
                        ['Submissions', subcount],
                        ['Comments', comcount]
                    ]);

                    // Set chart options
                    var options = {
                        'title': 'Over role progress of the site',
                        'width': 500,
                        'height': 500
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }


            }



        })
    });
</script>