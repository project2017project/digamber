<?php

include '../dbconection/connection.php';
$loansName = $_POST['loansName'];
$IMLLoan = $_POST['IMLLoan'];
$JLGLoan = $_POST['JLGLoan'];

if ($loansName) { 
    $sql = "INSERT INTO `loans` (`loansName`, `JLGLoan`, `IMLLoan`)"
            . " VALUES ('" . $loansName . "', '" . $JLGLoan . "', '" . $IMLLoan . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:loans.php");
    } else {
        header("location:loansAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>