<?php

include '../dbconection/connection.php';
$lifeName = $_POST['lifeName'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/life/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `life` (`lifeName`, `lifeImage`)"
            . " VALUES ('" . $lifeName . "' ,'" . $mypicname . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:life.php");
    } else {
        header("location:lifeAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>