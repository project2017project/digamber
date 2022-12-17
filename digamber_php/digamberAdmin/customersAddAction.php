<?php

include '../dbconection/connection.php';
$customersName = $_POST['customersName'];
$customersPlace = $_POST['customersPlace'];
$customersMessage = $_POST['customersMessage'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../images/customers/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `customers` (`customersName`, `customersImage`, `customersMessage`, `customersPlace`)"
            . " VALUES ('" . $customersName . "', '" . $mypicname . "', '" . $customersMessage . "', '" . $customersPlace . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:customers.php");
    } else {
        header("location:customersAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>