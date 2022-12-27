<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$title=$_POST['title'];
$year = $_POST['year'];
$description = $_POST['description'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/journey/" . $mypicname;

$sql = "select image from `journey` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `journey` SET `image` = '" . $mypicname . "',
                                    `title` = '" . $title . "',
                                    `year` = '" . $year . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:journey.php");
} else { 
    $sql = "UPDATE `journey` SET `image` = '" . $imagename['image'] . "',
                                    `title` = '" . $title . "',
                                    `year` = '" . $year . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:journey.php");
}
?> 