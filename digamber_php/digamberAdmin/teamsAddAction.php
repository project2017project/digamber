<?php

include '../dbconection/connection.php';
$teamsName = $_POST['teamsName'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/teams/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `teams` (`name`, `image`, `designation`, `description`)"
            . " VALUES ('" . $teamsName . "', '" . $mypicname . "', '" . $designation . "', '" . $description . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:teams.php");
    } else {
        header("location:teamsAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>