<?php

include '../dbconection/connection.php';
$investorsType = $_POST['investorsType'];
$investorsMessgae= $_POST['investorsMessgae'];
$investorsName= $_POST['investorsName']; 
if ($investorsName) {  
    $sql = "INSERT INTO `investors` (`investorsType`, `investorsName`, `investorsMessgae`)"
            . " VALUES ('" . $investorsType . "' ,'" . $investorsName . "' ,'" . $investorsMessgae. "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:investors.php");
    } else {
        header("location:investorsAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>