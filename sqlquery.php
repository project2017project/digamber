<?php
include 'dbconection/connection.php';
$c_id = 1;
$sql = "select * from `settings` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);

$partnerssql = "select * from `partners`";
$partnersres = $mysqli->query($partnerssql) or die( mysqli_error($mysqli));
//$partners = mysqli_fetch_array($partnersres);
?>