<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/font-awesome-animation.css" rel="stylesheet" />
        <link href="css/flexslider.css" rel="stylesheet" />
        <link href="css/swiper.min.css" rel="stylesheet" />
        <style>
            html {
                height: 100%;
            }

            .genbtn {
                width: 100%;
                height: 50px;
                display: inline-block;
                padding: 6px 12px;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
                background-color: #C10202;
                color: white;
                font-size: 22px;
                font-weight: bold;
            }

            .btn-primary:hover {
                color: #fff;
                background-color: #A30000;
                border-color: #A30000;
            }


            .btn-primary.active.focus,
            .btn-primary.active:focus,
            .btn-primary.active:hover,
            .btn-primary:active.focus, 
            .btn-primary:active:focus, 
            .btn-primary:active:hover,
            .open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
                color: #fff;
                background-color: #C10202;
                border-color: #C10202;
            }


            #demotst {
                width: 100%;
                height: 400px;
                background-color: grey;
            }

            .error {
                color: white;
                font-weight: normal !important;
            }
        </style>

    </head>

    <body style="background-image:url('imgs/backgroiund.png');background-size:cover;background-repeat:no-repeat">
        <section id="contact">
		
		
            <form name="GenerateGDA" action="logincheck.php"  method="post">
                <div class="container">
				
				
                    <div class="row" style="text-align:center;margin-top:15%;">
                        
			<div class="col-sm-7 col-sm-offset-2 animated fadeInLeft">
						
                            <img style="width:25%" src="imgs/school.jpg" />
                        </div>
                            <div class="col-sm-7 col-sm-offset-2 animated fadeInLeft">
                            <br>
                            <span id="Invalid" style="color:#fff;font-size: large;font-weight: bold;">SVS by ICOSOL</span>
                            
                        </div>
						
                    </div>
                    <?php if (!empty($_GET['message'])) { ?>   
                     <div class="row" style="margin-top: 5%;text-align:left;margin-left: 19%;margin-bottom: -4%;">
                         <span id="Invalid" style="color:#fff;font-size: medium;font-weight: bold;">Invalid Username Or Password</span> 
                     </div>
                        <?php
                    }
                    ?>
                    <div class="row" style="margin-top:5%;margin-bottom:50px">
                        <div class="col-sm-7 col-sm-offset-2 animated fadeInLeft">
                            <input class="form-control" style="height:50px" type="text"  name ="username" id="username" placeholder="Username" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 col-sm-offset-2 animated fadeInLeft">
                            <input class="form-control" style="height:50px" type="password"  name="password" id="password" placeholder="password" />
                        </div>
                    </div>
                    <div class="row" style="padding-left: 10px;padding-top: 50px;text-align:center">

                        <div class="col-sm-7 col-sm-offset-2 animated fadeInLeft">
                            <input type="hidden" id="positiondata" name="positiondata" />
                            <button type="submit" class="btn-primary genbtn" onclick="ValidateForm()" style="margin-bottom:100px">Login</button>
                        </div>

                    </div>
                </div>
            </form>
			
			 

        </section>


        <script src="js/jquery.1.11.1.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/agency.js"></script>
        <script src="js/jquery.easing.js"></script>
        <script src="vendor/jquery.validate.min.js"></script>

        <script type="text/javascript">

                                $('#mainCaptcha').bind("cut copy paste", function (e) {
                                    e.preventDefault();
                                });
                                function ValidateForm() {
                                    $(function () {
                                        $("form[name='GenerateGDA']").validate({
                                            rules: {
                                                username: "required",
                                                password: "required",
                                            },
                                            messages: {
                                                username: "Please enter your username",
                                                password: "Please enter your password",
                                            },
                                            submitHandler: function (form) {
                                                var schoolName = $("#username").val();
                                                var schoolpassword = $("#password").val();
                                                var errormessage = $("#errormessage").val();
                                                form.submit();
                                            }
                                        });
                                    });


                                }


        </script>

    </body>
</html>
