<?php

include '../dbconection/connection.php';
$name = explode('/', $_POST['conpentencytype']);
$competencies_type_id = $name[0];
$conpentency_name = $name[1]; 
$description= trim($_POST['description']);
$description_review= trim($_POST['description_review']); 
if ($name) {  
    $sql = "INSERT INTO `competencies` (`competencies_type_id`, `name`, `description`, `description_review`)"
            . " VALUES ('" . $competencies_type_id . "' ,'" . $conpentency_name . "' ,'" . $description. "' ,'" . $description_review. "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:news.php");
    } else {
        header("location:Add-news.php");
    }
} else {
    echo 'Not Insert table';
}
?>