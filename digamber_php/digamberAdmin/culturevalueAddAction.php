<?php

include '../dbconection/connection.php';
$culturevalueName = $_POST['culturevalueName'];
$culturevalueMessage = $_POST['culturevalueMessage'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/culturevalue/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `culturevalue` (`name`, `image`, `description`)"
            . " VALUES ('" . $culturevalueName . "', '" . $mypicname . "', '" . $culturevalueMessage . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:culturevalue.php");
    } else {
        header("location:culturevalueAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>