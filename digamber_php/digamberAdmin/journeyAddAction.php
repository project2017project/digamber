<?php

include '../dbconection/connection.php';
$title = $_POST['title'];
$year = $_POST['year'];
$description = $_POST['description'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/journey/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `journey` (`title`, `image`, `year`, `description`)"
            . " VALUES ('" . $title . "', '" . $mypicname . "', '" . $year . "', '" . $description . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:journey.php");
    } else {
        header("location:journeyAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>