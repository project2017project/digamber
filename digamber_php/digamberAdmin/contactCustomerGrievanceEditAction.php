<?php

include '../dbconection/connection.php';
$id = $_POST['id'];

$loanHeading2=$_POST['loanHeading2'];
$loanpopupHeading2=$_POST['loanpopupHeading2'];
$stakeHeading=$_POST['stakeHeading'];

$aboutMessage=$_POST['aboutMessage'];
$popupMessage=$_POST['popupMessage'];

if ($loanHeading2) {
    $sql = "UPDATE `settings` SET   `loanHeading2` = '" . $loanHeading2 . "',
                                    `aboutMessage` = '" . $aboutMessage . "', 
                                    `stakeHeading` = '" . $stakeHeading . "',
                                    `loanpopupHeading2` = '" . $loanpopupHeading2 . "', 
                                    `popupMessage` = '" . $popupMessage . "'  
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:contactCustomerGrievanceEdit.php");
} 
?> 