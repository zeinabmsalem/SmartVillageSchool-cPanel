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

    <body class="no-skin" style="background-color:white">
        <div class="main-content" style="height: 766px;">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="header_alumni_kipling.php">Home</a>
                        </li>
                        <li>

                            <a href="header_about.php">Header of Alumni / Kipling</a>
                        </li>

                        <li class="active">Edit Header of Alumni</li>
                    </ul>
                    <ul class="breadcrumb" style="background-color: #fc0000; float: right">
                          <img src="logouticon.svg" width="20px" height="20px"/>
                        <li><a href="logout.php">Log-out</a></li>
                    </ul>
                </div>

                <div class="page-content" style="margin-top: 150px;">

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
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-md-11">
                                    
                                    <?php
                                    
                                    $header_id = $_GET['id'];
                                    $sql = "SELECT * from header_alumni_kipling
                                                            where id =  " . $header_id;

                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                    <form class="form-horizontal" role="form"  method="post" action="update_header_alumni_kipling.php" enctype="multipart/form-data">
                                                <table id="simple-table" class=" table-hover" style="width: 100%;">                                        
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td>
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right " for="form-field-1" style="text-align: left;">Summary</label>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        
                                                                        <input type="text"  id="form-field-1" name="summary" 
                                                                               value="<?php echo $row["summary"]; ?>" style="width:50%"/>
                                                                        
                                                                        <input type="hidden"  id="form-field-1" name="header_id" 
                                                                               value="<?php echo $header_id; ?>"/>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                             <td>
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right " for="form-field-1" style="text-align: left;">
                                                                        Image
                                                                     </label>
                                                                    
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="file" name="image" placeholder="IMAGE" required/>                             
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class=" form-group col-xs-7 col-md-8 col-md-offset-4 col-sm-8" style="padding-right: 57px;text-align:right">
                                                                    <button type="submit" class="btn btn-sm btn-success" name="edit">
                                                                        Edit Record
                                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                    </button>
                                                                    <div class="space-4"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>

                                            </form>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div><!-- /.span -->
                            </div><!-- /.row -->


                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
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
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>


        <script src="assets/js/jquery-2.1.4.min.js"></script>


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

