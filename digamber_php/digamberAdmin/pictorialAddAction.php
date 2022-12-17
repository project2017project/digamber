<?php

include '../dbconection/connection.php';
$pictorialName = $_POST['pictorialName'];
$pictorialPlace = $_POST['pictorialPlace'];
$pictorialMessage = $_POST['pictorialMessage'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/pictorial/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `pictorial` (`pictorialName`, `pictorialImage`, `pictorialMessage`, `pictorialPlace`)"
            . " VALUES ('" . $pictorialName . "', '" . $mypicname . "', '" . $pictorialMessage . "', '" . $pictorialPlace . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:pictorial.php");
    } else {
        header("location:pictorialAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>