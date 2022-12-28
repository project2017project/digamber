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

$c_id3 = 3;
$contactsql = "select * from `settings` where id='" . $c_id3 . "'";
$contactres = $mysqli->query($contactsql) or die( mysqli_error($mysqli));
$contactsettings = mysqli_fetch_array($contactres);

$c_id4 = 4;
$aboutsql = "select * from `settings` where id='" . $c_id4 . "'";
$aboutres = $mysqli->query($aboutsql) or die( mysqli_error($mysqli));
$aboutsettings = mysqli_fetch_array($aboutres);

$c_id5 = 5;
$csrsql = "select * from `settings` where id='" . $c_id5 . "'";
$csrres = $mysqli->query($csrsql) or die( mysqli_error($mysqli));
$csrsettings = mysqli_fetch_array($csrres);

$c_id6 = 6;
$careersql = "select * from `settings` where id='" . $c_id6 . "'";
$careerres = $mysqli->query($careersql) or die( mysqli_error($mysqli));
$careersettings = mysqli_fetch_array($careerres);

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

$culturevaluesql = "select * from `culturevalue`";
$culturevalueres = $mysqli->query($culturevaluesql) or die( mysqli_error($mysqli));

$culturevaluesqljs = "select * from `culturevalue`";
$culturevalueresjs = $mysqli->query($culturevaluesqljs) or die( mysqli_error($mysqli));

$culturevaluesqlpopup = "select * from `culturevalue`";
$culturevaluerespopup = $mysqli->query($culturevaluesqlpopup) or die( mysqli_error($mysqli));

$mapsql = "select * from `map`";
$mapres = $mysqli->query($mapsql) or die( mysqli_error($mysqli));

$mapsql1 = "select * from `map`";
$mapres1 = $mysqli->query($mapsql1) or die( mysqli_error($mysqli));

$mapsql2 = "select * from `map`";
$mapres2 = $mysqli->query($mapsql2) or die( mysqli_error($mysqli));

$directorssql = "select * from `directors`";
$directorsres = $mysqli->query($directorssql) or die( mysqli_error($mysqli));

$directorssqljs = "select * from `directors`";
$directorsresjs = $mysqli->query($directorssqljs) or die( mysqli_error($mysqli));

$directorssqlpopup = "select * from `directors`";
$directorsrespopup = $mysqli->query($directorssqlpopup) or die( mysqli_error($mysqli));

$teamssql = "select * from `teams`";
$teamsres = $mysqli->query($teamssql) or die( mysqli_error($mysqli));

$teamssqljs = "select * from `teams`";
$teamsresjs = $mysqli->query($teamssqljs) or die( mysqli_error($mysqli));

$teamssqlpopup = "select * from `teams`";
$teamsrespopup = $mysqli->query($teamssqlpopup) or die( mysqli_error($mysqli));

$jobsql = "select * from `job`";
$jobres = $mysqli->query($jobsql) or die( mysqli_error($mysqli));

$journeysql = "select * from `journey` ORDER BY year";
$journeyres = $mysqli->query($journeysql) or die( mysqli_error($mysqli));

$committeessql = "select * from `committees`";
$committeesres = $mysqli->query($committeessql) or die( mysqli_error($mysqli));

$projectdetailssql = "select * from `projectdetails`";
$projectdetailsres = $mysqli->query($projectdetailssql) or die( mysqli_error($mysqli));

$innovationsql = "select * from `innovation`";
$innovationres = $mysqli->query($innovationsql) or die( mysqli_error($mysqli));

$lifesql = "select * from `life`";
$liferes = $mysqli->query($lifesql) or die( mysqli_error($mysqli));
// echo "<pre>";
// print_r($investors);
// die;
?>