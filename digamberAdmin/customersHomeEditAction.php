<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$customersHeading=$_POST['customersHeading'];

if ($customersHeading) {
    $sql = "UPDATE `settings` SET `customersHeading` = '" . $customersHeading . "' WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:customersHomeEdit.php");
} else { 
    header("location:customersHomeEdit.php");
}
?> 