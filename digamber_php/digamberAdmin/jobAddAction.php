<?php

include '../dbconection/connection.php';
$jobRole = $_POST['jobRole'];
$jobLocation = $_POST['jobLocation'];
$jobDepartment = $_POST['jobDepartment'];
$jobExperience = $_POST['jobExperience'];


if ($jobRole) { 
    $sql = "INSERT INTO `job` (`jobRole`, `jobExperience`, `jobDepartment`, `jobLocation`)"
            . " VALUES ('" . $jobRole . "', '" . $jobExperience . "', '" . $jobDepartment . "', '" . $jobLocation . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:job.php");
    } else {
        header("location:jobAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>