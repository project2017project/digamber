<?php

include '../dbconection/connection.php';
$id                 = $_POST['id'];
$stateName          = $_POST['stateName'];
$coordinates        = $_POST['coordinates'];
$location           = str_replace( " ", "-", $_POST['stateName'] );
$branches           = $_POST['branches'];
$portfolio          = $_POST['portfolio'];
$members            = $_POST['members'];



if ($stateName) {    
    $sql = "UPDATE `map` SET    `stateName` = '" . $stateName . "',
                                `coordinates` = '" . $coordinates . "',
                                `location` = '" . $location . "',
                                `branches` = '" . $branches . "',
                                `portfolio` = '" . $portfolio . "',
                                `members` = '" . $members . "'
                                WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:maplocation.php");
} else { 
    echo "error";
}
?> 