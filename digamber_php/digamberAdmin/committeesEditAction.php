<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$committeesName=$_POST['committeesName'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/committees/" . $mypicname;

$sql = "select image from `committees` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `committees` SET `image` = '" . $mypicname . "',
                                    `name` = '" . $committeesName . "',
                                    `designation` = '" . $designation . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:committees.php");
} else { 
    $sql = "UPDATE `committees` SET `image` = '" . $imagename['image'] . "',
                                    `name` = '" . $committeesName . "',
                                    `designation` = '" . $designation . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:committees.php");
}
?> 