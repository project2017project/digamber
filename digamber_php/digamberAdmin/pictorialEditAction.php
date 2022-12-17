<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$pictorialName=$_POST['pictorialName'];
$pictorialPlace = $_POST['pictorialPlace'];
$pictorialMessage = $_POST['pictorialMessage'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/pictorial/" . $mypicname;

$sql = "select pictorialImage from `pictorial` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `pictorial` SET `pictorialImage` = '" . $mypicname . "',
                                    `pictorialName` = '" . $pictorialName . "',
                                    `pictorialPlace` = '" . $pictorialPlace . "',
                                    `pictorialMessage` = '" . $pictorialMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:pictorial.php");
} else { 
    $sql = "UPDATE `pictorial` SET `pictorialImage` = '" . $imagename['pictorialImage'] . "',
                                    `pictorialName` = '" . $pictorialName . "',
                                    `pictorialPlace` = '" . $pictorialPlace . "',
                                    `pictorialMessage` = '" . $pictorialMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:pictorial.php");
}
?> 