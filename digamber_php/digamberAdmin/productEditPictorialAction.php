<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$stakeHeading=$_POST['stakeHeading'];
    $sql = "UPDATE `settings` SET `stakeHeading` = '" . $stakeHeading . "' WHERE `id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:productEditPictorial.php");

?> 