<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");
// if ($count===0) {
//     $err_login="There were some problem";
// }
if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }  
    else  {
        header("Location:../index.php");
    }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            location('index.php');    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link
            href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIKKCYiWgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIgKCYiuygmIhgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJDKCYi7SgmIlIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJzKCYi/SgmIqAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIgooJiKmKCYi/ygmIuAoJiIOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIh8oJiLPKCYi/ygmIv4oJiI/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIkEoJiLrKCYi/ygmIv8oJiKMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmInAoJiL8KCYi/ygmIv8oJiL/KCYiySgmIpwoJiJzKCYiKQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIhYoJiJyKCYinCgmIsIoJiL8KCYi/ygmIv8oJiL/KCYinygmIgkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJTKCYi/ygmIv8oJiL5KCYiaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIeKCYi7ygmIv8oJiLjKCYiNwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIDKCYixCgmIv8oJiK+KCYiFQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYigigmIv8oJiKJKCYiAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiPigmIvAoJiJSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiEigmIrooJiInAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIlooJiIMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP/3AAD/7wAA/88AAP8fAAD+PwAA/D8AAPgfAAD4DwAA/j8AAPx/AAD4/wAA8f8AAPf/AADv/wAA//8AAA=="
            rel="icon" type="image/x-icon" />

        <title>EBMS</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->


        <!-- Custom styles for this template -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- Fonts from Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><b>EBMS</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <?php include("login.php"); ?>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <div id="headerwrap">
            <div class="">
                <div class="container darkhearderwrap">
                    <div class="row">
                        <div class="col-lg-6 signup">
                            <h1>Electricity Bill Management System</h1>
                            <p>The electricity bill management system tracks and analyzes a consumer's energy usage to
                                provide insight into electricity consumption patterns, costs, and potential savings.
                                This website at the end of its construction will act as a consumer oriented service for
                                users for easy payment of their respective <b>Electricity Bill</b> as well as interact
                                with their providers in case of any queries or grivances.</p>
                        </div>
                        <!-- /col-lg-6 -->
                        <div class="col-lg-6">
                            <h1>Sign Up</h1>
                            <?php include("signup.php"); ?>
                        </div>
                        <!-- /col-lg-6 -->

                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
        </div>
        <!-- /headerwrap -->


        <div class="container darkhearderwrap">
            <div class="row mt centered">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1>How this portal works</h1>
                    <h3></h3>
                </div>
            </div>
            <!-- /row -->

            <div class="row mt centered">
                <div class="col-lg-4">
                    <img src="assets/img/ser01.png" width="180" alt="">
                    <h4>1 - Login</h4>
                    <p></p>
                </div>
                <!--/col-lg-4 -->

                <div class="col-lg-4">
                    <img src="assets/img/ser02.png" width="180" alt="">
                    <h4>2 - Manage</h4>
                    <p></p>
                </div>
                <!--/col-lg-4 -->

                <div class="col-lg-4">
                    <img src="assets/img/ser03.png" width="180" alt="">
                    <h4>3 - Transact</h4>
                    <p></p>
                </div>
                <!--/col-lg-4 -->

            </div>
            <!-- /row -->

            <div class="centered">
                Created by <b>Aishwary & Soumyadeep</b>
            </div>
        </div>
        <!-- /container -->


        <!--=======================JS=========================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-1.11.0.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- jQuery Version 1.11.0 -->

        <script src="assets/js/custom.js"></script>
        <script>

            function validateForm() {
                var x = document.forms["myForm"]["email"].value;
                var atpos = x.indexOf("@");
                var dotpos = x.lastIndexOf(".");
                if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                    alert("Not a valid e-mail address");
                    return false;
                }
            }  </script>


    </body>

</html>