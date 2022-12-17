<?php

include '../dbconection/connection.php';
$name = $_POST['name'];
$c_id = $_POST['id'];
$description= trim($_POST['description']);
if ($c_id) {  
 $sql = "UPDATE `competencies` SET `name` = '" . $name . "' , `description`='" . $description. "' WHERE `id` ='" . $c_id . "'";

    $res = $mysqli->query($sql);

    //header("location:news.php");
    echo "<script> window.location.href = 'news.php';</script>";
} else { //header("location:Edit-staff.php");
    echo "<script> window.location.href = 'Edit-news.php';</script>";
}

?> 