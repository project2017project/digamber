<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$headingfirst=$_POST['bannerHeading'];
$headingsecond=$_POST['bannerSubHeading'];
$aboutHeading=$_POST['aboutHeading'];
$popupHeading=$_POST['popupHeading'];

$loanHeading=$_POST['loanHeading'];
$loanSubHeading=$_POST['loanSubHeading'];
$loanHeading1=$_POST['loanHeading1'];
$loanpopupHeading1=$_POST['loanpopupHeading1'];

$file = $_FILES['pic']['name'];   // This Line for pic name
$mypicname = $file;   // Updated Pic Name
$destination = "../../images/banner/" . $mypicname;   // Path With Updated Image

$sql = "select 	bannerImage from `settings` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {
    $sql = "UPDATE `settings` SET   `bannerImage` = '" . $mypicname . "',
                                    `bannerHeading` = '" . $headingfirst . "',
                                    `bannerSubHeading` = '" . $headingsecond . "',
                                    `popupHeading` = '" . $popupHeading . "',
                                    `loanHeading` = '" . $loanHeading . "',
                                    `loanSubHeading` = '" . $loanSubHeading . "',
                                    `loanHeading1` = '" . $loanHeading1 . "',
                                    `loanpopupHeading1` = '" . $loanpopupHeading1 . "',  
                                    `aboutHeading` = '" . $aboutHeading . "'  
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:contactGetInTouchEdit.php");
} else { 
    $sql = "UPDATE `settings` SET `bannerImage` = '" . $imagename['bannerImage'] . "',
                                  `bannerHeading` = '" . $headingfirst . "',
                                  `bannerSubHeading` = '" . $headingsecond . "',
                                  `popupHeading` = '" . $popupHeading . "',
                                  `loanHeading` = '" . $loanHeading . "',
                                  `loanSubHeading` = '" . $loanSubHeading . "',
                                  `loanHeading1` = '" . $loanHeading1 . "',
                                  `loanpopupHeading1` = '" . $loanpopupHeading1 . "',  
                                  `aboutHeading` = '" . $aboutHeading . "' 
                                  WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:contactGetInTouchEdit.php");
}
?> 