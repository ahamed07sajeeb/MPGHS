<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mohangonj Pilot Govt. High School</title>

    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap-social.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../bower_components/jsImgSlider/themes/2/js-image-slider.css">
    <link rel="stylesheet" href="../css/mystyle.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="../bower_components/jsImgSlider/themes/2/js-image-slider.js"></script>
    <script src="../bower_components/jsImgSlider/flux.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#ck").val("hello world");
        });

    </script>
</head>


<body>
    <?php include "../resourses/menu.php";?>
        <script>
            var parent = document.getElementById("right-ul");
            var child = document.getElementById("lin");
            parent.removeChild(child);

        </script>

        <div class="container">
            <!--<div class="row" id="main-login-row">
                <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title">Login</h2>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
            </div>-->
            <div class="row row-content panel-wrapper">
                <div class="col-sm-8 col-xs-12">
                    <div class="row row-content">
                        <div class="col-sm-8 col-sm-offset-1 lin-panel">
                            <form action="#" method="POST">
                                <!--<p style="padding-bottom: 120px;"></p>-->

                                <div class="form-group" id="not-matched-alert">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <button class="close" type="button" id="close" aria-label="close"><i id="close-alert" class="fa fa-close" aria-hidden="true"></i></button>Email and Password Not Matched!</div>


                                </div>

                                <div class="form-group has-feedback has-success">
                                    <input id="user" type="text" name="email" placeholder="Type your Email" class="form-control" style="margin-bottom:20px;">
                                    <span class="form-control-feedback glyphicon glyphicon-user right-bar-icon"></span>
                                </div>
                                <div class="form-group has-feedback has-success">
                                    <input id="pass" type="password" name="pass" placeholder="Type your password" autocomplete="on" class="form-control has-danger">
                                    <span class="form-control-feedback glyphicon glyphicon-lock"></span>
                                </div>

                                <hr>
                                <div class="form-group has-error">
                                    <label for="remember" class="checkbox-inline">
                                        <input type="checkbox" name="remember" id="remember" class=""> <span> Keep me logged in</span>
                                        <button type="submit" name="login" id="lin" class=" btn btn-warning form-control pull-right"><i class="fa fa-sign-in"></i> Login</button>
                                    </label>

                                </div>
                                <p style="padding-bottom: 1px;"></p>


                            </form>

                        </div>
                        <div class="col-sm-3 col-xs-12 reg-panel">
                           <!-- <img src="../images/logo.png" class="img-circle" height="100" width="100">-->
                            <a class="btn btn-link" href="#">
                                <div class="">
                                    <h4>Forgot</h4>
                                    <h6>I've Forgot my Password</h6>
                                </div>
                            </a>
                            <hr>
                            <a class="btn btn-link" href="../signup/">
                                <div class="">
                                    <h4>Register</h4>
                                    <h6>I don't have any Account</h6>
                                </div>
                            </a>

                        </div>

                    </div>

                </div>


            </div>
        </div>
        <?php include "../resourses/footer.php";?>
            <script src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



            <?php 
    setcookie("user_email", "off", (time()+86400), '/');
    session_start();
        include "../resourses/loginValidation.php";
        
    if( isset( $_POST['login'])){
            if( isset($_POST['email'])){
                $user = $_POST['email'];
            }    
            if(isset($_POST['pass'])){
                $pass = $_POST['pass'];
            }
            $log = new loginValidation($user,$pass);
           
            
                $session_name = "userName";
                $session_value = $log -> user_name();
                $mobile_number = $log -> user_mobile();
                
                $_SESSION[$session_name]= $session_value;
                $_SESSION["email"] = $user;
                $_SESSION["mobile"] = $mobile_number;
                
              if(($user == $log -> user_ID())&& ($pass == $log -> user_password())){
                  
                if(isset($_POST["remember"])){
                    ?>

                <script>
                    window.location.href = "../resourses/create_cookies.php?email=<?php echo $user;?>&name=<?php echo $session_value;?>";

                </script>

                <?php
                    
                }else{
                    ?>
                    <script>
                        alert("Cookies not set");

                    </script>

                    <?php
                    
                }
                
    ?>
                        <script>
                            window.location = "../home/";

                        </script>
                        <?php
            }else{
                ?>
                            <script>
                                $("#not-matched-alert").slideDown("slow");
                                $("#close").click(function() {
                                    $("#not-matched-alert").slideUp("slow");
                                });

                            </script>
                            <?php 
            }   
        }
    ?>
                                <script>
                                    $("li[data-toggle='popover']").popover();

                                </script>
</body>

</html>
