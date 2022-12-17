<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$stakeHeading=$_POST['stakeHeading'];
$stakeMessage=trim($_POST['stakeMessage']);
    $sql = "UPDATE `settings` SET `stakeHeading` = '" . $stakeHeading . "',
                                `stakeMessage` = '" . $stakeMessage . 
                                "' WHERE `id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:Edit_Home_Stake.php");

?> 