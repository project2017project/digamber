<?php

include '../dbconection/connection.php';
$c_id = $_REQUEST['id'];
$sql = "delete from `investors` WHERE `id` ='" . $c_id . "'";
$res = $mysqli->query($sql);
if ($res >= 1) {
    echo "<script> window.location.href = 'investors.php';</script>";
} else {
    echo "<script> window.location.href = 'investors.php';</script>";
}
?>


