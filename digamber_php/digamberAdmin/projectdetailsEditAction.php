<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$projectdetailsName=$_POST['projectdetailsName'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/projectdetails/" . $mypicname;

$sql = "select projectdetailsImage from `projectdetails` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `projectdetails` SET `projectdetailsImage` = '" . $mypicname . "',
                                    `projectdetailsName` = '" . $projectdetailsName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:projectdetails.php");
} else { 
    $sql = "UPDATE `projectdetails` SET `projectdetailsImage` = '" . $imagename['projectdetailsImage'] . "',
                                    `projectdetailsName` = '" . $projectdetailsName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:projectdetails.php");
}
?> 