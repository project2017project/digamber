<?php

include 'dbconection/connection.php';

$type           = $_POST['type'];
$fullname       = $_POST['fullname'];
$email          = $_POST['email'];
$phonenumber    = $_POST['phonenumber'];
$message        = addslashes($_POST['message']);
$reason         = $_POST['reason'];


if ($_POST['type'] == 1) {  
    
    $sql = "INSERT INTO `contact` (`type`, `fullname`, `phonenumber`, `message`, `reason`, `email`)"
            . " VALUES ('" . $type . "', '" . $fullname . "', '" . $phonenumber . "', '" . $message . "', '" . $reason ."', '".$email."')";
    $reg = $mysqli->query($sql);   
    header("location:contact.php?status=success");                                 
} elseif ($_POST['type'] == 2) {
    $sql = "INSERT INTO `contact` (`type`, `fullname`, `phonenumber`, `message`, `reason`, `email`)"
    . " VALUES ('" . $type . "', '" . $fullname . "', '" . $phonenumber . "', '" . $message . "', '" . $reason ."', '".$email."')";
    $reg = $mysqli->query($sql);   
    header("location:contact.php?status=success");                                 
} else {
    echo "Please subimt Again";
}
?> 