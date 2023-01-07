<?php

include '../dbconection/connection.php';
$pic = $_FILES['pic'];
$bannerHeading=$_POST['bannerHeading'];

$mypicname = $pic['name'];   
$destination = "../../images/Home_Banner/" . $mypicname;  

if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) {
//$sql="INSERT INTO `supe_cat` (`Af_Cat`, `Af_Image`) VALUES ('".$Af_Cat."' , '".$mypicname."')";
    $sql = "INSERT INTO `homebanner` (`bannerImage`,`bannerHeading`) 
	VALUES ('" . $mypicname . "','" . $bannerHeading . "')";
    //return false;
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:homeBanner.php");
    } else {
        header("location:homeBannerAdd.php");
    }
} else {
    echo 'Not Insert table';
}
?>