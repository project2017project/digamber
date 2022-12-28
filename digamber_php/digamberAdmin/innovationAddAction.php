<?php

include '../dbconection/connection.php';
$innovationName = $_POST['innovationName'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/innovation/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `innovation` (`innovationName`, `innovationImage`)"
            . " VALUES ('" . $innovationName . "' ,'" . $mypicname . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:innovation.php");
    } else {
        header("location:innovationAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>