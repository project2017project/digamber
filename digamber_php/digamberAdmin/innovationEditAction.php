<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$innovationName=$_POST['innovationName'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/innovation/" . $mypicname;

$sql = "select innovationImage from `innovation` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `innovation` SET `innovationImage` = '" . $mypicname . "',
                                    `innovationName` = '" . $innovationName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:innovation.php");
} else { 
    $sql = "UPDATE `innovation` SET `innovationImage` = '" . $imagename['innovationImage'] . "',
                                    `innovationName` = '" . $innovationName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:innovation.php");
}
?> 