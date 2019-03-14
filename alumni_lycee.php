<?php
include("dbconn.php");

$userType_id;
session_start();
if (empty($_SESSION['userType_id'])) {
    header("Location:loginpage.php");
} else {
    $userType_id = $_SESSION['userType_id'];
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <style>
        /*@import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic);*/

        /*---- Responsive Typography base ----*/


        blockquote {
            font-style:italic;
            color:#777;
            margin:1em 0;
            line-height:1.55;
        }

        /*-- everything else --*/
        header {background:#038; color:#ffe; padding:12vw;
                border-bottom:solid .3em #ffd; box-shadow: 0 2px 3px #888;}
        header h1 { 
            font-family: fantasy;
            font-size: 10.25vw; 
            text-align:left; 
            line-height:1.22; 
            margin:.8em 0 .5em;
        }
        h1 small {display:block; font-size:100%;}

        article {
            width:calc(80% + 1.75vw);
            max-width:35em;
            margin:auto;
        }

        article h1 {font-size:4em; }
        h1 span {display:inline-block;}

        p {
            line-height:1.65;
        }



    </style>
    <style>

        .mcenter{
            text-align:center;
        }

        .navbar-brand {
            position: relative;
            z-index: 2;
        }

        .navbar-nav.navbar-right .btn {
            position: relative;
            z-index: 2;
            padding: 4px 20px;
            margin: 10px auto;
            transition: transform 0.3s;
        }

        .navbar .navbar-collapse {
            position: relative;
            overflow: hidden !important;
        }


        .navbar .nav-collapse {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
            padding-right: 120px;
            padding-left: 80px;
            width: 100%;
        }

        .navbar.navbar-default .nav-collapse {
            background-color: #f8f8f8;
        }

        .navbar.navbar-inverse .nav-collapse {
            background-color: #222;
        }

        .navbar .nav-collapse .navbar-form {
            border-width: 0;
            box-shadow: none;
        }

        .nav-collapse > li {
            float: right;
        }

        .btn.btn-circle {
            border-radius: 50px;
        }

        .btn.btn-outline {
            background-color: transparent;
        }

        .navbar-nav.navbar-right .btn:not(.collapsed) {
            background-color: rgb(111, 84, 153);
            border-color: rgb(111, 84, 153);
            color: rgb(255, 255, 255);
        }

        .navbar.navbar-default .nav-collapse,
        .navbar.navbar-inverse .nav-collapse {
            height: auto !important;
            transition: transform 0.3s;
            transform: translate(0px,-50px);
        }

        .navbar.navbar-default .nav-collapse.in,
        .navbar.navbar-inverse .nav-collapse.in {
            transform: translate(0px,0px);
        }


        @media screen and (max-width: 767px) {


            .navbar .nav-collapse {
                margin: 7.5px auto;
                padding: 0;
            }

            .navbar .nav-collapse .navbar-form {
                margin: 0;
            }

            .nav-collapse > li {
                float: none;
            }

            .navbar.navbar-default .nav-collapse,
            .navbar.navbar-inverse .nav-collapse {
                transform: translate(-100%,0px);
            }

            .navbar.navbar-default .nav-collapse.in,
            .navbar.navbar-inverse .nav-collapse.in {
                transform: translate(0px,0px);
            }

            .navbar.navbar-default .nav-collapse.slide-down,
            .navbar.navbar-inverse .nav-collapse.slide-down {
                transform: translate(0px,-100%);
            }

            .navbar.navbar-default .nav-collapse.in.slide-down,
            .navbar.navbar-inverse .nav-collapse.in.slide-down {
                transform: translate(0px,0px);
            }
        }
    </style>
    <style>




        .navbar-inverse {
            background-color: #fff !important;
            border-color: #ffffff; 
        }


        .navbar .navbar-nav>li {
            border-width: 0px;
        }

        .navbar .navbar-nav>li {
            /* border: 1px solid rgba(0,0,0,.2); */
            border-width: 0px !important;
        }

        @media (min-width: 768px) {

            .navbar {
                border-radius: 0px;
            }
        }

        body{
            background-color: white;
        }


        .navbar-header {
            background: #fff; 
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #000;
        }
    </style>

    <style>
        /*@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);*/

        footer {
            background-color: #000;
            font-family: 'Open Sans', sans-serif;
        }

        .footerleft {
            margin-top: 50px;
            padding: 0 36px;
        }

        .logofooter {
            margin-bottom: 10px;
            font-size: 25px;
            color: #fff;
            font-weight: 700;
        }

        .footerleft p {
            color: #fff;
            font-size: 12px !important;
            font-family: 'Open Sans', sans-serif;
            margin-bottom: 15px;
        }

        .footerleft p i {
            width: 20px;
            color: #999;
        }


        .paddingtop-bottom {
            margin-top: 50px;
        }

        .footer-ul {
            list-style-type: none;
            padding-left: 0px;
            margin-left: 2px;
        }

        .footer-ul li {
            line-height: 29px;
            font-size: 12px;
        }

        .footer-ul li a {
            color: #a0a3a4;
            transition: color 0.2s linear 0s, background 0.2s linear 0s;
        }

        .footer-ul i {
            margin-right: 10px;
        }

        .footer-ul li a:hover {
            transition: color 0.2s linear 0s, background 0.2s linear 0s;
            color: #ff670f;
        }

        .social:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }




        .icon-ul {
            list-style-type: none !important;
            margin: 0px;
            padding: 0px;
        }

        .icon-ul li {
            line-height: 75px;
            width: 100%;
            float: left;
        }

        .icon {
            float: left;
            margin-right: 5px;
        }


        .copyright {
            min-height: 40px;
            background-color: #000000;
        }

        .copyright p {
            text-align: left;
            color: #FFF;
            padding: 10px 0;
            margin-bottom: 0px;
        }

        .heading7 {
            font-size: 21px;
            font-weight: 700;
            color: #d9d6d6;
            margin-bottom: 22px;
        }

        .post p {
            font-size: 12px;
            color: #FFF;
            line-height: 20px;
        }

        .post p span {
            display: block;
            color: #8f8f8f;
        }

        .bottom_ul {
            list-style-type: none;
            float: right;
            margin-bottom: 0px;
        }

        .bottom_ul li {
            float: left;
            line-height: 40px;
        }

        .bottom_ul li:after {
            content: "/";
            color: #FFF;
            margin-right: 8px;
            margin-left: 8px;
        }

        .bottom_ul li a {
            color: #FFF;
            font-size: 12px;
        }
    </style>




    <style>
        a:hover{
            text-decoration:none;
        }
    </style>
</head>

<body>
    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#Services"><i class="mbr-arrow-icon"></i></a></div>

	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb" style="background-color: #db3a3c">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="all_lycee.php">Home</a>
                            </li>
                         
                        </ul>
                        <ul class="breadcrumb" style="background-color: #db3a3c; float: right">
                            <img src="logouticon.svg" width="20px" height="20px"/>
                            <li><a href="logout.php">Log-out</a></li>
                        </ul><!-- /.breadcrumb -->

                    </div>
        <div class="container" id="Services" style=" padding-top: 120px;padding-bottom: 150px;  ">
            <div class="row">
                
                    <div class="col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;padding-left:40px;padding-right: 40px">
                        <div class="card-img iconbox mcenter"><a href="header_alumni_lycee.php" class="fa fa-map-o  fa-4x" style="color:#e40405;  font-size:9em;"></a>  
                        </div>
                         <div class="card-block mcenter">
                          <h4 class="card-title">Header</h4>
                         </div>

                    </div>
                                
                    <div class="col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;padding-left:40px;padding-right: 40px">
                       <div class="card-img iconbox mcenter"><a href="endpage_alumni_lycee.php" class="fa fa-map-o  fa-4x" style="color:#e40405 ; font-size:9em;"></a> </div>
                        <div class="card-block mcenter">
                           <h4 class="card-title">Endpage Alumni</h4>

                        </div>

                    </div>
                                
            </div>

        </div>
       

    <div style="background-color:black">
        <div class="container" style="width:100%">
            <div class="row">
                <div class="col-md-6 col-md-offset-1 col-sm-6 footerleft ">
                    <div class="logofooter">
                        <img src="imgs/ICOSOLLogoWhite.png" />
                    </div>
                    <p>about ICOSOL company</p>
                    <!--<p><i class="fa fa-map-pin"></i>North of shwyfat, 5th settelment, New cairo</p>
                    <p><i class="fa fa-phone"></i> Phone (Egypt) : +91 9999 878 398</p>-->
                    <p><i class="fa fa-envelope"></i> E-mail :jobs@istecheg.com</p>

                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container"  style="width:100%">
                <div class="col-md-6 col-md-offset-1">
                    <p>© 2017 ICOSOL company for smart solutions</p>
                </div>

            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>

    <script src="js/jquery.1.11.1.js"></script>
    <script src="js/index.js"></script>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/theme/js/script.js"></script>



</body>
</html>