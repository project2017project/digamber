<?php

include '../dbconection/connection.php';
$committeesName = $_POST['committeesName'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/committees/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `committees` (`name`, `image`, `designation`, `description`)"
            . " VALUES ('" . $committeesName . "', '" . $mypicname . "', '" . $designation . "', '" . $description . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:committees.php");
    } else {
        header("location:committeesAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>