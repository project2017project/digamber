<?php

include '../dbconection/connection.php';
$projectdetailsName = $_POST['projectdetailsName'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/projectdetails/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `projectdetails` (`projectdetailsName`, `projectdetailsImage`)"
            . " VALUES ('" . $projectdetailsName . "' ,'" . $mypicname . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:projectdetails.php");
    } else {
        header("location:projectdetailsAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>