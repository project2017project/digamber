<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$teamsName=$_POST['teamsName'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/teams/" . $mypicname;

$sql = "select image from `teams` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `teams` SET `image` = '" . $mypicname . "',
                                    `name` = '" . $teamsName . "',
                                    `designation` = '" . $designation . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:teams.php");
} else { 
    $sql = "UPDATE `teams` SET `image` = '" . $imagename['image'] . "',
                                    `name` = '" . $teamsName . "',
                                    `designation` = '" . $designation . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:teams.php");
}
?> 