<?php

include '../dbconection/connection.php';
$id                 = $_POST['id'];
$jobRole            = $_POST['jobRole'];
$jobLocation        = $_POST['jobLocation'];
$jobDepartment      = $_POST['jobDepartment'];
$jobExperience      = $_POST['jobExperience'];



if ($jobRole) {    
    $sql = "UPDATE `job` SET `jobExperience` = '" . $jobExperience . "',
                            `jobRole` = '" . $jobRole . "',
                            `jobLocation` = '" . $jobLocation . "',
                            `jobDepartment` = '" . $jobDepartment . "'
                            WHERE `Id` = '" . $id . "'";
    $res = $mysqli->query($sql);
    header("location:job.php");
} else { 
    echo "error";
}
?> 