<?php

include '../dbconection/connection.php';
$investorsTypeName = $_POST['investorsTypeName']; 
if ($investorsTypeName) {  
    $sql = "INSERT INTO `investorstype` (`investorsTypeName`) VALUES ('" . $investorsTypeName . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:investorsType.php");
    } else {
        header("location:investorsTypeAddAction.php");
    }
} else {
    echo 'Not Insert table';
}
?>