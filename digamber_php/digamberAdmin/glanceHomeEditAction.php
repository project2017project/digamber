<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$glanceHeading=$_POST['glanceHeading'];
$glanceSubHeading=$_POST['glanceSubHeading'];

if ($glanceHeading) {
    $sql = "UPDATE `settings` SET `glanceHeading` = '" . $glanceHeading . "',`glanceSubHeading` = '" . $glanceSubHeading . "' WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:glanceHomeEdit.php");
} else {
    header("location:glanceHomeEdit.php");
}
?> 