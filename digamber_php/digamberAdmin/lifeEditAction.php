<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$lifeName=$_POST['lifeName'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/life/" . $mypicname;

$sql = "select lifeImage from `life` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `life` SET `lifeImage` = '" . $mypicname . "',
                                    `lifeName` = '" . $lifeName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:life.php");
} else { 
    $sql = "UPDATE `life` SET `lifeImage` = '" . $imagename['lifeImage'] . "',
                                    `lifeName` = '" . $lifeName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:life.php");
}
?> 