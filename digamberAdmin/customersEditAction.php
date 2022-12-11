<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$customersName=$_POST['customersName'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../images/customers/" . $mypicname;

$sql = "select customersImage from `customers` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `customers` SET `customersImage` = '" . $mypicname . "',
                                    `customersName` = '" . $customersName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:customers.php");
} else { 
    $sql = "UPDATE `customers` SET `customersImage` = '" . $imagename['customersImage'] . "',
                                    `customersName` = '" . $customersName . "' 
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:customers.php");
}
?> 