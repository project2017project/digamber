<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$testinomialName=$_POST['testinomialName'];
$testinomialMessage = $_POST['testinomialMessage'];
$file = $_FILES['pic']['name'];
$mypicname = $file;
$destination = "../../images/testinomial/" . $mypicname;

$sql = "select testinomialImage from `testinomial` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {    
    $sql = "UPDATE `testinomial` SET `testinomialImage` = '" . $mypicname . "',
                                    `testinomialName` = '" . $testinomialName . "',
                                    `testinomialMessage` = '" . $testinomialMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:testinomial.php");
} else { 
    $sql = "UPDATE `testinomial` SET `testinomialImage` = '" . $imagename['testinomialImage'] . "',
                                    `testinomialName` = '" . $testinomialName . "',
                                    `testinomialMessage` = '" . $testinomialMessage . "'
                                    WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:testinomial.php");
}
?> 