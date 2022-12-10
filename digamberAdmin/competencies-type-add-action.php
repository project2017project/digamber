<?php

include '../dbconection/connection.php';
$competencies_type_name = $_POST['competencies_type_name']; 
if ($competencies_type_name) {  
    $sql = "INSERT INTO `competencies_type` (`competencies_type_name`)"
            . " VALUES ('" . $competencies_type_name . "')";
    $reg = $mysqli->query($sql);
    if ($reg >= 1) {
        header("location:competencies-type.php");
    } else {
        header("location:competencies-type-add-action.php");
    }
} else {
    echo 'Not Insert table';
}
?>