<?php
include 'dbconection/connection.php';
$c_id = 1;
$sql = "select * from `settings` where id='" . $c_id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$settings = mysqli_fetch_array($res);

$c_id2 = 2;
$sql2 = "select * from `settings` where id='" . $c_id2 . "'";
$res2 = $mysqli->query($sql2) or die( mysqli_error($mysqli));
$settings2 = mysqli_fetch_array($res2);

$partnerssql = "select * from `partners`";
$partnersres = $mysqli->query($partnerssql) or die( mysqli_error($mysqli));
//$partners = mysqli_fetch_array($partnersres);

$customerssql = "select * from `customers`";
$customersres = $mysqli->query($customerssql) or die( mysqli_error($mysqli));

$pictorialsql = "select * from `pictorial`";
$pictorialres = $mysqli->query($pictorialsql) or die( mysqli_error($mysqli));

$glancesql = "select * from `glance`";
$glanceres = $mysqli->query($glancesql) or die( mysqli_error($mysqli));
?>