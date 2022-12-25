<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$financeName=$_POST['financeName'];
$financeMessage = $_POST['financeMessage'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/finance/" . $mypicname;

$sql = "select financeImage from `finance` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `finance` SET `financeImage` = '" . $mypicname . "',
                                    `financeName` = '" . $financeName . "',
                                    `financeMessage` = '" . $financeMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:finance.php");
} else { 
    $sql = "UPDATE `finance` SET `financeImage` = '" . $imagename['financeImage'] . "',
                                    `financeName` = '" . $financeName . "',
                                    `financeMessage` = '" . $financeMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:finance.php");
}
?> 