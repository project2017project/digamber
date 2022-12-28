<?php

include '../conection/connection.php';
$User_Id = $_POST['User_Id'];
$User_Name = $_POST['User_Name'];
$User_Password = md5($_POST['User_Password']);

if ($User_Id) {
  
    $sql = "UPDATE `users` SET `User_Id` = '" . $User_Id . "' ,`User_Name` = '" . $User_Name . "' ,`User_Password` = '" . $User_Password . "' WHERE `User_Id` ='" . $User_Id . "'";
    $res = $mysqli->query($sql);
    echo "<script> window.location.href = 'profile.php';</script>";
} else { 
    echo "<script> window.location.href = 'editprofile-action.php';</script>";
}

?> 