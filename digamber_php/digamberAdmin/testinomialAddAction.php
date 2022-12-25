<?php

include '../dbconection/connection.php';
$testinomialName = $_POST['testinomialName'];
$testinomialMessage = $_POST['testinomialMessage'];
$file = $_FILES['pic']['name']; 
$mypicname = $file;
$destination = "../../images/testinomial/" . $mypicname;

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) { 
    $sql = "INSERT INTO `testinomial` (`testinomialName`, `testinomialImage`, `testinomialMessage`)"
            . " VALUES ('" . $testinomialName . "', '" . $mypicname . "', '" . $testinomialMessage . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:testinomial.php");
    } else {
        header("location:testinomialAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>