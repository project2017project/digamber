<?php

include '../dbconection/connection.php';
$financeName = $_POST['financeName'];
$financeMessage = $_POST['financeMessage'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/finance/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `finance` (`financeName`, `financeImage`, `financeMessage`)"
            . " VALUES ('" . $financeName . "', '" . $mypicname . "', '" . $financeMessage . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:finance.php");
    } else {
        header("location:financeAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>