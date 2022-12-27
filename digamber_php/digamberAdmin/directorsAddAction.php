<?php

include '../dbconection/connection.php';
$directorsName = $_POST['directorsName'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/directors/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `directors` (`name`, `image`, `designation`, `description`)"
            . " VALUES ('" . $directorsName . "', '" . $mypicname . "', '" . $designation . "', '" . $description . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:directors.php");
    } else {
        header("location:directorsAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>