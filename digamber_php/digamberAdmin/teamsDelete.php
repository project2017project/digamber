<?php

include '../dbconection/connection.php';
$c_id = $_REQUEST['id'];
$sql = "delete from `teams` WHERE `id` ='" . $c_id . "'";
$res = $mysqli->query($sql);
if ($res >= 1) {
    echo "<script> window.location.href = 'teams.php';</script>";
} else {
    echo "<script> window.location.href = 'teams.php';</script>";
}
?>


