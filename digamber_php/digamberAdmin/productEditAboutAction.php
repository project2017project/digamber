<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$aboutMessage=trim($_POST['aboutMessage']);

$sql = "UPDATE `settings` SET `aboutMessage` = '" . $aboutMessage . "' WHERE `id` = '" . $id . "'";
$res = $mysqli->query($sql);

header("location:productEditAbout.php");

?> 