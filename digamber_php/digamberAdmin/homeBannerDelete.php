<?php

include '../conection/connection.php';
$id = $_REQUEST['id'];
$sql = "delete from `home_banner` WHERE `Id` ='" . $id . "'";
//delete from featured where id=$f_id";
$res = $mysqli->query($sql);
//echo $sql;
if ($res >= 1) {
//header("location:Category.php");
    echo "<script> window.location.href = 'Home_Banner.php';</script>";
} else {
    //header("location:Category.php");
    echo "<script> window.location.href = 'Home_Banner.php';</script>";
}
?>


