<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teachers and Students Center</title>

    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/bootstrap-social.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="../css/mystyle.css">

    <link rel="stylesheet" href="../bower_components/css/hover-min.css">
    <link rel="stylesheet" href="style.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body data-spy="scroll" data-target="#myScrollSpy" data-offset="100">
    <?php include "../resourses/menu.php";?>
        <script type="text/javascript">
            var d = document.getElementById("tsc");
            d.className = "active";

        </script>

        <header class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-xs-12 col-sm-8">
                        <h2>Students Panel <small>Mohangonj Pilot Govt. High School</small></h2>

                        <p style="padding:40px;"></p>
                        <p>Mohangoj Pilot Govt. High School is a very reputed high school in Netrakona district. She has a great and well trained Teachers panel and ofcourse a nice brillient students.</p>
                    </div>
                    <div class="col-xs-12 col-sm-4" style="border-left: 1px solid #ddd;">
                        <p style="padding-top: 0px;"></p>
                        <img class="img-responsive img-circle" id="avater" src="../images/common.jpeg" id="head-master" width="200" height="200">
                        <div id="hm-info">
                            <h2>Admin</h2>
                            <h4>Sajeeb Ahamed <small> Bsc. in Computer Science and Engineering</small></h4>
                        </div>


                    </div>

                </div>
            </div>
        </header>
        <!-- end jumbotron header-->


        <div class="container-fluid">
            <div class="row" id="getFixed">
                <div class="col-sm-6 hidden-xs">
                    <h1 class="">Formar Students</h1>
                </div>
                <div class="col-sm-6 col-xs-6" style="margin-top: 30px;">
                    <form class="" method="POST" action="search-students.php">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="search_txt" id="search" placeholder="Search a student by name or passing year">
                            <span class="form-control-feedback glyphicon glyphicon-search"></span>
                            <button type="submit" class="form-control invisible" name="hide"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="row row-content" style="display:flex; flex-wrap: wrap;">



                <?php 
                include "../resourses/show_students.php";
                $show = new showStudents;
                $show -> show();
                
                
                
                ?>


                    <!-- end the whole left part-->
            </div>
            <!-- end the inner row-->


        </div>
        <!-- end main container-->
        <a class="btn btn-danger scrolltotop" target="_top" style=" width: 100px; display: none; position: fixed; z-index: 999; top: 600px; ">
            <span class="glyphicon glyphicon-chevron-up fa-2x"></span></a>









        <?php include "../resourses/footer.php";?>

            <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../bower_components/jquery/dist/chart.min.js"></script>
            <script type="text/javascript" src="../js/passingGraph.js"></script>

            <script type="text/javascript">
                jQuery(function($) {
                    function fixDiv() {
                        var $cache = $('#getFixed');
                        if ($(window).scrollTop() > 450)
                            $cache.css({
                                'position': 'fixed',
                                'top': '40px'
                            });
                        else
                            $cache.css({
                                'position': 'relative',
                                'top': 'auto'
                            });
                    }
                    $(window).scroll(fixDiv);
                    fixDiv();
                });

            </script>
            <script type="text/javascript" src="../js/scrolltop.js"></script>
    <?php
    require "../resourses/showNotification.inc";
    $noti = new showNotification();
    $noti -> show();
    ?>

</body>

</html>
