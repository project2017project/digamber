<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$directorsName=$_POST['directorsName'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/directors/" . $mypicname;

$sql = "select image from `directors` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `directors` SET `image` = '" . $mypicname . "',
                                    `name` = '" . $directorsName . "',
                                    `designation` = '" . $designation . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:directors.php");
} else { 
    $sql = "UPDATE `directors` SET `image` = '" . $imagename['image'] . "',
                                    `name` = '" . $directorsName . "',
                                    `designation` = '" . $designation . "',
                                    `description` = '" . $description . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:directors.php");
}
?> 