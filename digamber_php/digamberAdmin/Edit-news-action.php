<?php

include '../dbconection/connection.php';
$competencies_type_id = $_POST['conpentencytype'];
$sql = "select * from competencies_type where id=".$competencies_type_id;
$row = $mysqli->query($sql);
$conpentency_name_name = mysqli_fetch_object($row);
//print_r($conpentency_name_name);
$conpentency_name = $conpentency_name_name->competencies_type_name;
$c_id = $_POST['id'];
$description= trim($_POST['description']);
$description_review= trim($_POST['description_review']); 
if ($c_id) {  
 $sql = "UPDATE `competencies` SET `name` = '" . $conpentency_name . "' ,
                                    `description`='" . $description. "' , 
                                    `competencies_type_id`='" . $competencies_type_id. "', 
                                    `description_review`='" . $description_review. "' WHERE `id` ='" . $c_id . "'";

    $res = $mysqli->query($sql);

    //header("location:news.php");
    echo "<script> window.location.href = 'news.php';</script>";
} else { //header("location:Edit-staff.php");
    echo "<script> window.location.href = 'Edit-news.php';</script>";
}

?> 