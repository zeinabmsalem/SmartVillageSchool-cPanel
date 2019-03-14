
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

<!DOCTYPE html>
<html lang="en">
    <head>
	 <title>Smart Delivery System</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <script src="assets/js/ace-extra.min.js"></script>
       <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);

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
    </head>

    <body class="no-skin" style="background-color:White">
            <div class="main-content" style="height: 766px;">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="home.php">Home</a>
                            </li>
                              <li>
                            
                                <a href="upcoming_events.php">Upcoming Events</a>
                            </li>


                            <li class="active">Delete Event</li>
                        </ul>
                         <ul class="breadcrumb" style="background-color: #fc0000; float: right">
                               <img src="logouticon.svg" width="20px" height="20px"/>
                            <li><a href="logout.php">Log-out</a></li>
                        </ul><!-- /.breadcrumb -->


                    </div>
                    <?php
                    $event_id = $_GET['id'];
                    
                    $strId_sql = "SELECT * from events
                                    where id =  " . $event_id;
                    
                    $strId_result = mysqli_query($conn, $strId_sql);
                    if (mysqli_num_rows($strId_result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($strId_result)) {
                            ?>


                            <div class="col-xs-12 col-sm-6 col-md-offset-3 col-md-6 widget-container-col" id="widget-container-col-4" style="margin-top: 150px;margin-bottom:150px ">
                                <div class="widget-box" id="widget-box-4">
                                    <div class="widget-header widget-header-large">
                                        <h4 class="widget-title" style="font-weight: bold;color: #fc0000;">Delete Event !</h4>


                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <center>
                                                <p class="alert alert-info" style="border-color: white;background-color: white;" >

                                                    Are you sure you want to delete Event: <b><?php echo $row["title"]; ?> </b> with ID: <?php echo $row["id"]; ?>

                                                </p>
                                            </center> 
                                        </div>
                                    </div>

                                    <div class="padding-8 clearfix" style="padding:30px">
                                        <a href="upcoming_events.php">
                                            <button class="btn btn-xs btn-danger pull-left">
                                                <i class="ace-icon fa fa-times"></i>
                                                <span class="bigger-110">No, Please Cancel</span>
                                            </button>
                                        </a>
                                        <a href="delete_event.php?id=<?php echo $row["id"]; ?>">  
                                            <button type="submit" class="btn btn-xs btn-success pull-right" name="delete">

                                                <span class="bigger-110">Yes, I am sure</span>

                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>

                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>
            </div><!-- /.main-content -->
           
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
                        <p>Â© 2017 ICOSOL company for smart solutions</p>
                    </div>

                </div>
            </div>
       
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
                    if ('ontouchstart' in document.documentElement)
                        document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/js/buttons.flash.min.js"></script>
        <script src="assets/js/buttons.html5.min.js"></script>
        <script src="assets/js/buttons.print.min.js"></script>
        <script src="assets/js/buttons.colVis.min.js"></script>
        <script src="assets/js/dataTables.select.min.js"></script>

        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

          </body>
</html>

