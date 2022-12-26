<?php

include '../dbconection/connection.php';
$id = $_POST['id'];
$loanHeading=$_POST['loanHeading'];
$loanSubHeading=$_POST['loanSubHeading'];

$file1 = $_FILES['pic1']['name'];   // This Line for pic name
$mypicname1 = $file1;   // Updated Pic Name
$destination1 = "../../images/about/" . $mypicname1;   // Path With Updated Image

$loanHeading2=$_POST['loanHeading2'];
$loanMessage2=trim($_POST['loanMessage2']);
$loanpopupHeading2=$_POST['loanpopupHeading2'];
$loanpopupMessage2=trim($_POST['loanpopupMessage2']);
$file2 = $_FILES['pic2']['name'];   // This Line for pic name
$mypicname2 = $file2;   // Updated Pic Name
$destination2 = "../../images/about/" . $mypicname2;   // Path With Updated Image

$sql = "select 	loanImage1, loanImage2 from `settings` where id='" . $id . "'";
$res = $mysqli->query($sql) or die( mysqli_error($mysqli));
$imagename = mysqli_fetch_array($res);

if (move_uploaded_file($_FILES['pic1']['tmp_name'], $destination1) || move_uploaded_file($_FILES['pic2']['tmp_name'], $destination2)) {

    if (!empty($mypicname1) && !empty($mypicname2)) {
        $sql = "UPDATE `settings` SET `loanImage1` = '" . $mypicname1 . "',
                                `loanHeading` = '" . $loanHeading . "',
                                `loanSubHeading` = '" . $loanSubHeading . "',
                                `loanImage2` = '" . $mypicname2 . "',
                                `loanHeading2` = '" . $loanHeading2 . "',
                                `loanMessage2` = '" . $loanMessage2 . "',
                                `loanpopupHeading2` = '" . $loanpopupHeading2 . "',
                                `loanpopupMessage2` = '" . $loanpopupMessage2 . 
                                "' WHERE `id` = '" . $id . "'";
        $res = $mysqli->query($sql);
    } else {
        if (!empty($mypicname1)) {
            $sql = "UPDATE `settings` SET `loanImage1` = '" . $mypicname1 . "',
                                `loanHeading` = '" . $loanHeading . "',
                                `loanSubHeading` = '" . $loanSubHeading . "',
                                `loanImage2` = '" . $imagename['loanImage2'] . "',
                                `loanHeading2` = '" . $loanHeading2 . "',
                                `loanMessage2` = '" . $loanMessage2 . "',
                                `loanpopupHeading2` = '" . $loanpopupHeading2 . "',
                                `loanpopupMessage2` = '" . $loanpopupMessage2 . 
                                "' WHERE `id` = '" . $id . "'";
            $res = $mysqli->query($sql);
        } else if (!empty($mypicname2)) { 
            $sql = "UPDATE `settings` SET `loanImage2` = '" . $mypicname2 . "',
                                `loanHeading` = '" . $loanHeading . "',
                                `loanSubHeading` = '" . $loanSubHeading . "',
                                `loanImage1` = '" . $imagename['loanImage1'] . "',
                                `loanHeading2` = '" . $loanHeading2 . "',
                                `loanMessage2` = '" . $loanMessage2 . "',
                                `loanpopupHeading2` = '" . $loanpopupHeading2 . "',
                                `loanpopupMessage2` = '" . $loanpopupMessage2 . 
                                "' WHERE `id` = '" . $id . "'";
            $res = $mysqli->query($sql);
        } 

    }
    header("location:aboutPageVissionMission.php");
} else {
    $sql = "UPDATE `settings` SET `loanImage1` = '" . $imagename['loanImage1'] . "',
                                `loanHeading` = '" . $loanHeading . "',
                                `loanSubHeading` = '" . $loanSubHeading . "',
                                `loanImage2` = '" . $imagename['loanImage2'] . "',
                                `loanHeading2` = '" . $loanHeading2 . "',
                                `loanMessage2` = '" . $loanMessage2 . "',
                                `loanpopupHeading2` = '" . $loanpopupHeading2 . "',
                                `loanpopupMessage2` = '" . $loanpopupMessage2 . 
                                "' WHERE `id` = '" . $id . "'";
    $res = $mysqli->query($sql);

    header("location:aboutPageVissionMission.php");
}

?> 