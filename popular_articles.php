<?php
include("dbconn.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
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

    </head>
    
    
    <body class="no-skin">


        <div class="main-container ace-save-state" id="main-container" style="height: 768px;">
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb"style="background-color: #fc0000">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="all_activites.php">Home</a>
                            </li>
                            <li class="active">Popular Articles / Activites</li>
                        </ul><!-- /.breadcrumb -->

                        <ul class="breadcrumb" style="background-color: #fc0000; float: right">
                            <img src="logouticon.svg" width="20px" height="20px"/>
                            <li><a href="logout.php">Log-out</a></li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content" style="margin-top: 20px;">

                        <?php if (!empty($displayedMessage)) {
                            ?>
                            <div class="widget-box widget-color-orange collapsed" id="widget-box-3">
                                <div class="widget-header widget-header-small">
                                    <h6 class="widget-title">
                                        <i class="ace-icon fa fa-sort"></i>
                                        <?php echo $displayedMessage; ?>

                                    </h6>


                                </div>
                            </div>
                        <?php } ?>




                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">

                                    <div class="x_content">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Summary</th>
                                                    <th>Image</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                   $sql = "SELECT * from popular_articles";

                                                    $result = mysqli_query($conn, $sql);

                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        ?>

                                                        <tr>
                                                            <td class="center">
                                                                <?php echo $row["id"]; ?>
                                                            </td>

                                                            <td class="center">
                                                                <?php echo $row["summary"]; ?>
                                                            </td>
                                                            
                                                            <td class="center">
                                                               <img src="<?php echo $row["img_url"]; ?>" width="100" height="100"/>
                                                            </td>
                                                           
                                                            <td class="center">
                                                                <a href="edit_popular_articles.php?id=<?php echo $row["id"]; ?>">

                                                                  <img src="updateicon.svg" width="40px" height="40px"/>
                                                                </a>

<!--                                                                <a href="delete_current_event_confirmation.php?id=<?php echo $row["id"]; ?>">
                                                                    <img src="deleteicon.svg" width="40px" height="40px"/>
                                                                </a>-->
                                                            </td>


                                                        </tr>
                                                        <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div><!-- /.span -->
                                </div><!-- /.row -->
                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
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
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/js/buttons.flash.min.js"></script>
        <script src="assets/js/buttons.html5.min.js"></script>
        <script src="assets/js/buttons.print.min.js"></script>
        <script src="assets/js/buttons.colVis.min.js"></script>
        <script src="assets/js/dataTables.select.min.js"></script>
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->

        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="vendors/jszip/dist/jszip.min.js"></script>
        <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>
    </body>

</html>