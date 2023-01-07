<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$bannerHeading=$_POST['bannerHeading'];
$file = $_FILES['pic']['name'];   // This Line for pic name
$mypicname = $file;   // Updated Pic Name
$destination = "../../images/Home_Banner/" . $mypicname;   // Path With Updated Image

$sql = "select 	bannerImage from `homebanner` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {
    $sql = "UPDATE `homebanner` SET `bannerImage` = '" . $mypicname . "',`bannerHeading` = '" . $bannerHeading . "' WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:homeBanner.php");
} else { 
    $sql = "UPDATE `homebanner` SET `bannerImage` = '" . $imagename['bannerImage'] . "',
                                  `bannerHeading` = '" . $bannerHeading . "'
                                  WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:homeBanner.php");
}
?> 