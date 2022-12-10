<?php
include '../dbconection/connection.php';
session_start();
$error = @$_SESSION['error'];
if ($error != "") {
    echo $error;
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/login.css">

    </head>
    <body>

        <style>
            html{
                height: 100%;
            }
            body{
                background: url(images/Gadi-Sagar-Temple-India.jpg) no-repeat center;
                background-size: cover;
                margin: 0;
                position: relative;
                min-height: 100%;
            }

            .login {
                margin: 0px auto;
                width: 500px;
                padding: 0px;
                border: 1px solid #E3EBEE;
                max-width: 100%;
                background: white;
                position: absolute;
                z-index: 999;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -webit-transform: translate(-50%, -50%);
                -moz-transform: translate(-50%, -50%);
                box-shadow: 0px 0px 10px -3px rgba(0, 0, 0, 0.5);
            }

            .wraper {
                padding: 30px;
                position: fixed;
                background: white;
                opacity: 0.95;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
            }

            .group-control{
                position: relative;
                display: table;
                border-collapse: separate;
                margin-bottom: 17px;

                background: white;
                border-top: none;
                border-left: none;
                border-right: none;


            }
            .form-control {
                display: block;
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: none;
                box-shadow: none;
                margin-left: -10px;
                border-bottom: 1px solid #eeeeee;
                margin-left: -10px;
                border-radius: 0;
                padding-left: 0;
            }
            .form-control:focus{ 
                box-shadow: none;
                border-bottom: 1px solid #eeeeee;

            }
            .input-control{
                color: white;
                background: #18a89c;
                padding: 10px;
                text-align: center;
                border: solid 1px #18a89c;
                font-weight: bold;
                width: 43%;
                display: table;
                font-size: 14px;
                margin-top: 10px;
                margin: 0 auto;
                box-shadow: 1px 1px 1px 1px #18a89c;
            }

            .input-control:hover{
                text-decoration: none;
                background: black;
                color: white;
                border: solid 1px black;
                box-shadow: 1px 1px 1px 1px black;
            }

            .input-group-addon{
                border-right: 0px;
                background: white;
                box-shadow: none;
                border-radius: 0;
                border: none;
                padding: 6px 28px 6px 0;
                color: rgba(40, 31, 31, 0.41);
            }
            .user{
                background: transparent;
                width: 100%;
                background-size: cover;
                min-height: 100px;
                background-position: center;
            }
            .user img{
                display: table;
                margin: 0 auto;
                padding: 30px;
            }
            .dash-user{
                text-align: center;
                font-size: 24px;
                width: 100%;
                max-width: 100%;
            }

            .form-horizontal{
                padding: 30px;
            }
            .checkbox{
                color:  rgba(40, 31, 31, 0.56);
                margin-left: 25px;
                margin-bottom: 23px;
            }
            .input-pass{
                display: table;
                text-align: center;
                margin: 0 auto;
                color: #18a89c;
                text-decoration: none;
                font-weight: bold;
            }
            .input-pass:hover{
                text-decoration: none;
                color: black;
            }

            .form-horizontal .checkbox{
                margin-bottom: 20px;
            }

            .input-pass{
                margin-top: 20px;
            }
        </style>
        <div class="wraper">      </div>

        <div class="login">

            <div class="user">
                <img src="../images/logo.png" height="150px"  /> 
            </div>
            <form class="form-horizontal" action="login_action.php" method="post">
                <fieldgroup>
                    <div class="group-control">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <input id="email" type="text" class="form-control" placeholder="Username" name="Email" required></div>
                    <div class="group-control">
                        <span class="input-group-addon">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password" required>
                    </div>
                    <!--div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                      </div-->
                    <!--a href="#" class="input-control">LOG IN</a-->
                    <input type="submit" class="input-control"  value="Login">
                    <!--a href="" class="input-pass">Forgot Password ?</a-->

                </fieldgroup>
            </form>
        </div>

    </body>
</html>