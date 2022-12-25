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

$c_id2 = 3;
$contactsql = "select * from `settings` where id='" . $c_id2 . "'";
$contactres = $mysqli->query($contactsql) or die( mysqli_error($mysqli));
$contactsettings = mysqli_fetch_array($contactres);

$partnerssql = "select * from `partners`";
$partnersres = $mysqli->query($partnerssql) or die( mysqli_error($mysqli));
//$partners = mysqli_fetch_array($partnersres);

$customerssql = "select * from `customers`";
$customersres = $mysqli->query($customerssql) or die( mysqli_error($mysqli));

$pictorialsql = "select * from `pictorial`";
$pictorialres = $mysqli->query($pictorialsql) or die( mysqli_error($mysqli));

$loanssql = "select * from `loans`";
$loansres = $mysqli->query($loanssql) or die( mysqli_error($mysqli));

$glancesql = "select * from `glance`";
$glanceres = $mysqli->query($glancesql) or die( mysqli_error($mysqli));

$investorssql = "select * from investors LEFT JOIN investorstype ON investorstype.id = investors.investorsType";
$investorsres = $mysqli->query($investorssql);
$investors = mysqli_fetch_all($investorsres);

$financesql = "select * from `finance`";
$financeres = $mysqli->query($financesql) or die( mysqli_error($mysqli));

$testinomialsql = "select * from `testinomial`";
$testinomialres = $mysqli->query($testinomialsql) or die( mysqli_error($mysqli));

$jobsql = "select * from `job`";
$jobres = $mysqli->query($jobsql) or die( mysqli_error($mysqli));
// echo "<pre>";
// print_r($investors);
// die;
?>