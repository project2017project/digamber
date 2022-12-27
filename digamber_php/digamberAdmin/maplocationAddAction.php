<?php

include '../dbconection/connection.php';
$stateName          = $_POST['stateName'];
$coordinates        = $_POST['coordinates'];
$location           = str_replace( " ", "-", $_POST['stateName'] );
$branches           = $_POST['branches'];
$portfolio          = $_POST['portfolio'];
$members            = $_POST['members'];


if ($stateName) { 
    $sql = "INSERT INTO `map` (`stateName`, `coordinates`, `location`, `branches`, `portfolio`, `members`)"
            . " VALUES ('" . $stateName . "', '" . $coordinates . "', '" . $location . "', '" . $branches . "', '" . $portfolio . "', '" . $members . "')";
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