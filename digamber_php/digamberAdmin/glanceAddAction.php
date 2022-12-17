<?php

include '../dbconection/connection.php';
$glanceName = $_POST['glanceName'];
$glanceNumber = $_POST['glanceNumber'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../images/glance/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `glance` (`glanceName`, `glanceImage`, `glanceNumber`)"
            . " VALUES ('" . $glanceName . "', '" . $mypicname . "', '" . $glanceNumber . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:glance.php");
    } else {
        header("location:glanceAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>