<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

<!--    <link href="--><?php //echo base_url('assets/css/bootstrap.min.css')?><!--" rel="stylesheet">-->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url('assets/fonts/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css')?>" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url('assets/css1/custom.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css1/maps/jquery-jvectormap-2.0.3.css')?>" />
    <link href="<?php echo base_url('assets/css1/icheck/flat/green.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css1/floatexamples.css')?>" rel="stylesheet" />

<!--    <script src="--><?php //echo base_url('assets/js/jquery.min.js')?><!--"></script>-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <!--[if lt IE 9]>
    <!--<script src="../assets/js/ie8-responsive-file-warning.js"></script>-->
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
        <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
    <script src="<?php echo base_url('assets/js/submit.js')?>"></script>
    <script src="<?php echo base_url('assets/js/comment.js')?>"></script>

    <!--    <script src="--><?php //base_url('assets/js/prototype.js')?><!--"></script>-->
<!--    <script src="--><?php //base_url('assets/js/scriptaculous.js')?><!--"></script>-->
    
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $( "#myform1" ).validate({
                rules: {
                    //   nombre: { required: true, number: false, minlength: 1 },
                    //  email: { required: true, email: true },
                    //  cp: { required: true, number: true, minlength: 5, maxlength: 5 },
                    password: { required: true, minlength: 8 },
                    password2: { required: true, minlength: 8, equalTo: "#password" }
                },
                messages: {
                    //   nombre: "Introduce un nombre correcto",
                    //   email: "Introduce un email correcto",
                    //  cp: "Introduce un codigo postal correcto",
                    password: "passwrord should be atleast 8 characters",
                    password2: "passwords should match"
                }
            });
            
        });
    </script>


</head>


<body class="nav-md">