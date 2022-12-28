<?php

include '../dbconection/connection.php';
$id                 = $_POST['id'];
$stateName          = $_POST['stateName'];
$coordinates        = $_POST['coordinates'];
$location           = $_POST['location'];
$cssproperty        = $_POST['cssproperty'];
$branches           = $_POST['branches'];
$portfolio          = $_POST['portfolio'];
$members            = $_POST['members'];

$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/map/" . $mypicname;

$sql = "select mapimage from `map` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);


if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `map` SET    `stateName` = '" . $stateName . "', `mapimage` = '" . $mypicname . "',
                                `coordinates` = '" . $coordinates . "',
                                `location` = '" . $location . "',
                                `cssproperty` = '" . $cssproperty . "',
                                `branches` = '" . $branches . "',
                                `portfolio` = '" . $portfolio . "',
                                `members` = '" . $members . "'
                                WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:maplocation.php");
} else { 
    $sql = "UPDATE `map` SET    `stateName` = '" . $stateName . "', `mapimage` = '" . $imagename['mapimage'] . "',
                                `coordinates` = '" . $coordinates . "',
                                `location` = '" . $location . "',
                                `cssproperty` = '" . $cssproperty . "',
                                `branches` = '" . $branches . "',
                                `portfolio` = '" . $portfolio . "',
                                `members` = '" . $members . "'
                                WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:maplocation.php");
}
?> 