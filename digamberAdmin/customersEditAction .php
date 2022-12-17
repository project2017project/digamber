<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$partnersName=$_POST['partnersName'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../images/Partners/" . $mypicname;

$sql = "select partnersImage from `partners` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `partners` SET `partnersImage` = '" . $mypicname . "',
                                    `partnersName` = '" . $partnersName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:partners.php");
} else { 
    $sql = "UPDATE `partners` SET `partnersImage` = '" . $imagename['partnersImage'] . "',
                                    `partnersName` = '" . $partnersName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:partners.php");
}
?> 