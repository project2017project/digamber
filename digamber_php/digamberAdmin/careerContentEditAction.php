<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$headingfirst=$_POST['bannerHeading'];
$headingsecond=$_POST['bannerSubHeading'];
$aboutMessage=$_POST['aboutMessage'];
$aboutHeading=$_POST['aboutHeading'];
$loanHeading=$_POST['loanHeading'];
$loanHeading1=$_POST['loanHeading1'];
$loanSubHeading=$_POST['loanSubHeading'];
$file = $_FILES['pic']['name'];   // This Line for pic name
$mypicname = $file;   // Updated Pic Name
$destination = "../../images/career_Banner/" . $mypicname;   // Path With Updated Image

$sql = "select 	bannerImage from `settings` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {
    $sql = "UPDATE `settings` SET `bannerImage` = '" . $mypicname . "', 
                                    `bannerHeading` = '" . $headingfirst . "', 
                                    `bannerSubHeading` = '" . $headingsecond . "', 
                                    `aboutMessage` = '" . $aboutMessage . "' ,
                                    `loanHeading` = '" . $loanHeading . "',
                                    `loanHeading1` = '" . $loanHeading1 . "',
                                    `loanSubHeading` = '" . $loanSubHeading . "', 
                                    `aboutHeading` = '" . $aboutHeading . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:careerContentEdit.php");
} else { 
    $sql = "UPDATE `settings` SET `bannerImage` = '" . $imagename['bannerImage'] . "',
                                  `bannerHeading` = '" . $headingfirst . "',
                                  `bannerSubHeading` = '" . $headingsecond . "', 
                                  `aboutMessage` = '" . $aboutMessage . "' , 
                                  `loanHeading` = '" . $loanHeading . "',
                                  `loanHeading1` = '" . $loanHeading1 . "',
                                    `loanSubHeading` = '" . $loanSubHeading . "',
                                  `aboutHeading` = '" . $aboutHeading . "' 
                                  WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:careerContentEdit.php");
}
?> 