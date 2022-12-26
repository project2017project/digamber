<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$culturevalueName=$_POST['culturevalueName'];
$culturevalueMessage = $_POST['culturevalueMessage'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/culturevalue/" . $mypicname;

$sql = "select image from `culturevalue` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `culturevalue` SET `image` = '" . $mypicname . "',
                                    `name` = '" . $culturevalueName . "',
                                    `description` = '" . $culturevalueMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:culturevalue.php");
} else { 
    $sql = "UPDATE `culturevalue` SET `image` = '" . $imagename['image'] . "',
                                    `name` = '" . $culturevalueName . "',
                                    `description` = '" . $culturevalueMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:culturevalue.php");
}
?> 