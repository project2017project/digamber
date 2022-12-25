<?php
include '../dbconection/connection.php';
$investorsName = $_POST['investorsName'];
$investorstype = $_POST['investorstype'];
$c_id = $_POST['id'];
$investorsMessgae= $_POST['investorsMessgae'];
if ($c_id) {  
    $sql = "UPDATE `investors` SET `investorsName` = '" . $investorsName . "' ,
                                    `investorsMessgae`='" . $investorsMessgae. "' , 
                                    `investorstype`='" . $investorstype. "' WHERE `id` ='" . $c_id . "'";
    $res = $mysqli->query($sql);
    header("location:investors.php");
    //echo "<script> window.location.href = 'news.php';</script>";
} else { 
    header("location:investors.php");
    //echo "<script> window.location.href = 'Edit-news.php';</script>";
}

?> 