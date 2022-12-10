<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$headingfirst=$_POST['bannerHeading'];
$headingsecond=$_POST['bannerSubHeading'];
$file = $_FILES['pic']['name'];   // This Line for pic name
$mypicname = $file;   // Updated Pic Name
$destination = "../images/Home_Banner/" . $mypicname;   // Path With Updated Image
if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    // This For Uploading Image
    // $sql="UPDATE `supe_cat` SET `Af_Cat` = '".$Af_Cat."' , `Af_Image` = '".$mypicname."' WHERE `Af_Id` ='".$c_id."'";
    $sql = "UPDATE `settings` SET `bannerImage` = '" . $mypicname . "',`bannerHeading` = '" . $headingfirst . "',`bannerSubHeading` = '" . $headingsecond . "' WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:Edit_Home_Banner.php");
   // echo "<script> window.location.href = 'Home_Banner.php';</script>";
} else { //header("location:Edit_Category.php");
    echo "<script> window.location.href = 'Edit_Home_Banner.php';</script>";
}
?> 