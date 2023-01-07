<?php

include '../dbconection/connection.php';
$jobRole            = $_POST['jobRole'];
$jobLocation        = $_POST['jobLocation'];
$jobDepartment      = $_POST['jobDepartment'];
$jobExperience      = $_POST['jobExperience'];
$jobDescription     = $_POST['jobDescription'];


if ($jobRole) { 
    $sql = "INSERT INTO `job` ( `jobRole`, 
                                `jobExperience`, 
                                `jobDepartment`, 
                                `jobLocation`, 
                                `jobDescription`)"
            . " VALUES (    '" . $jobRole . "', 
                            '" . $jobExperience . "', 
                            '" . $jobDepartment . "', 
                            '" . $jobLocation . "', 
                            '" . $jobDescription . "')";
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