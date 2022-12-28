<?php

include '../dbconection/connection.php';
$stateName          = $_POST['stateName'];
$coordinates        = $_POST['coordinates'];
$location           = $_POST['location'];
$cssproperty        = $_POST['cssproperty'];
$branches           = $_POST['branches'];
$portfolio          = $_POST['portfolio'];
$members            = $_POST['members'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/map/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {
    $sql = "INSERT INTO `map` (`stateName`, `mapimage`, `coordinates`, `location`, `branches`, `portfolio`, `members`, `cssproperty`)"
            . " VALUES ('" . $stateName . "', '" . $mypicname . "', '" . $coordinates . "', '" . $location . "', '" . $branches . "', '" . $portfolio . "', '" . $members . "', '" . $cssproperty . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:maplocation.php");
    } else {
        header("location:maplocationAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>