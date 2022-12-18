<?php
include '../dbconection/connection.php';
session_start();
IF (!isset($_SESSION['User_Name'])) {
    //echo "<script> window.location.href = 'login.php';</script>";
    header('location:login.php');
} else {
    echo "Welcome ".$_SESSION['User_Name'];
    //echo "Id:-&ensp;" .$_SESSION['A_Id'];
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Digamber Finance Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Digamber Finance" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--hemendra -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.12.3.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/fontello/css/fontello.css" rel='stylesheet' type='text/css' />
    <link href="css/fontello/css/icon_set_1.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/lines.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/sdstyle.css" rel='stylesheet' type='text/css' />
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/d3.v3.js"></script>
    <script src="js/rickshaw.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img height="50px" width='auto' src="../images/logo.png"></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><span
                            class="badge">Account</span></a>
                    <ul class="dropdown-menu">
                        <li class="m_2"><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                        <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a></li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="Edit_Home_Banner.php"><i class="fa fa-flask nav_icon"></i>Banner</a></li>
                                <li><a href="Edit_Home_About.php"><i class="fa fa-flask nav_icon"></i>About</a></li>
                                <li><a href="Edit_Home_Loan.php"><i class="fa fa-flask nav_icon"></i>Loan</a></li>
                                <li><a href="Edit_Home_Stake.php"><i class="fa fa-flask nav_icon"></i>Stake</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="productEditBanner.php"><i class="fa fa-flask nav_icon"></i>Banner</a></li>
                                <li><a href="productEditAbout.php"><i class="fa fa-flask nav_icon"></i>About</a></li>
                                <li><a href="productEditLoan.php"><i class="fa fa-flask nav_icon"></i>Loan</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Partners<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li><a href="partners.php"><i class="fa fa-flask nav_icon"></i>List</a></li>
                                <li><a href="partnersAdd.php"><i class="fa fa-flask nav_icon"></i>Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Customers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li><a href="customers.php"><i class="fa fa-flask nav_icon"></i>List</a></li>
                                <li><a href="customersAdd.php"><i class="fa fa-flask nav_icon"></i>Add</a></li>
                                <li><a href="customersHomeEdit.php"><i class="fa fa-flask nav_icon"></i>Title</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Pictorial<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li><a href="pictorial.php"><i class="fa fa-flask nav_icon"></i>List</a></li>
                                <li><a href="pictorialAdd.php"><i class="fa fa-flask nav_icon"></i>Add</a></li>
                                <li><a href="productEditPictorial.php"><i class="fa fa-flask nav_icon"></i>Title</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>loans<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li><a href="loans.php"><i class="fa fa-flask nav_icon"></i>List</a></li>
                                <li><a href="loansAdd.php"><i class="fa fa-flask nav_icon"></i>Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Glance<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li><a href="glance.php"><i class="fa fa-flask nav_icon"></i>List</a></li>
                                <li><a href="glanceAdd.php"><i class="fa fa-flask nav_icon"></i>Add</a></li>
                                <li><a href="glanceHomeEdit.php"><i class="fa fa-flask nav_icon"></i>Title</a></li>
                            </ul>
                        </li>
                        <li><a href="news.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>News</a></li>
                        <li><a href="competencies-type.php"><i
                                    class="fa fa-dashboard fa-fw nav_icon"></i>Compentency</a></li>
                        <li><a href="reviewerslist.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Reviewers</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="graphs">