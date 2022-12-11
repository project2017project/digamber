<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$glanceName=$_POST['glanceName'];
$glanceNumber = $_POST['glanceNumber'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../images/glance/" . $mypicname;

$sql = "select glanceImage from `glance` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `glance` SET `glanceImage` = '" . $mypicname . "',
                                    `glanceName` = '" . $glanceName . "',
                                    `glanceNumber` = '" . $glanceNumber . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:glance.php");
} else { 
    $sql = "UPDATE `glance` SET `glanceImage` = '" . $imagename['glanceImage'] . "',
                                    `glanceName` = '" . $glanceName . "',
                                    `glanceNumber` = '" . $glanceNumber . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:glance.php");
}
?> 