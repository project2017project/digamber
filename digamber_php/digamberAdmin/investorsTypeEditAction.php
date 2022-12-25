<?php

include '../dbconection/connection.php';
$investorsTypeName = $_POST['investorsTypeName'];
$c_id = $_POST['id'];
if ($c_id) {  
    $sql = "UPDATE `investorstype` SET `investorsTypeName` = '" . $investorsTypeName . "' WHERE `id` ='" . $c_id . "'";
    $res = $mysqli->query($sql);
    echo "<script> window.location.href = 'investorsType.php';</script>";
} else { 
    echo "<script> window.location.href = 'investorsTypeEdit.php';</script>";
}

?> 