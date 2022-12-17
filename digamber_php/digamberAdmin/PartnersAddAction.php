<?php

include '../dbconection/connection.php';
$partnersName = $_POST['partnersName'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../images/Partners/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `partners` (`partnersName`, `partnersImage`)"
            . " VALUES ('" . $partnersName . "' ,'" . $mypicname . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:partners.php");
    } else {
        header("location:partnersAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>