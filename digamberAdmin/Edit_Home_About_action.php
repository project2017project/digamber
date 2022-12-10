<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$headingfirst=$_POST['aboutHeading'];
$popupHeading=$_POST['popupHeading'];
$headingsecond=trim($_POST['aboutMessage']);
$popupMessage=trim($_POST['popupMessage']);
$file = $_FILES['pic']['name'];   // This Line for pic name
$mypicname = $file;   // Updated Pic Name
$destination = "../images/Home_About/" . $mypicname;   // Path With Updated Image

$sql = "select aboutImage from `settings` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {
    $sql = "UPDATE `settings` SET `aboutImage` = '" . $mypicname . "',
                                `aboutHeading` = '" . $headingfirst . "',
                                `aboutMessage` = '" . $headingsecond . "',
                                `popupHeading` = '" . $popupHeading . "',
                                `popupMessage` = '" . $popupMessage . 
                                "' WHERE `id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:Edit_Home_About.php");
} else {
    $sql = "UPDATE `settings` SET `aboutImage` = '" . $imagename['aboutImage'] . "',
                                `aboutHeading` = '" . $headingfirst . "',
                                `aboutMessage` = '" . $headingsecond . "',
                                `popupHeading` = '" . $popupHeading . "',
                                `popupMessage` = '" . $popupMessage . 
                                "' WHERE `id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:Edit_Home_About.php");
}

?> 