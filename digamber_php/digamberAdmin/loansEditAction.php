<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$loansName=$_POST['loansName'];
$IMLLoan = $_POST['IMLLoan'];
$JLGLoan = $_POST['JLGLoan'];

if ($loansName) {    
    $sql = "UPDATE `loans` SET  `loansName` = '" . $loansName . "',
                                `IMLLoan` = '" . $IMLLoan . "',
                                `JLGLoan` = '" . $JLGLoan . "'
                                WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:loans.php");
} else { 
    $sql = "UPDATE `loans` SET  `loansName` = '" . $loansName . "',
                                `IMLLoan` = '" . $IMLLoan . "',
                                `JLGLoan` = '" . $JLGLoan . "'
                                WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:loans.php");
}
?> 