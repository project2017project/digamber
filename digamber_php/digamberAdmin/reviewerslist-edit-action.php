<?php

include '../dbconection/connection.php';
$reviewer_category = $_POST['reviewer_category'];
$reviewer = $_POST['reviewer'];
$reviewee = $_POST['reviewee'];
$survey_id = $_POST['survey_id'];
$c_id = $_POST['id'];
if ($c_id) {  
 $sql = "UPDATE `reviews` SET `reviewer_category` = '" . $reviewer_category . "' , `reviewer`='" . $reviewer. "', `reviewee`='" . $reviewee. "', `survey_id`='" . $survey_id. "' WHERE `id` ='" . $c_id . "'";

    $res = $mysqli->query($sql);

    //header("location:news.php");
    echo "<script> window.location.href = 'reviewerslist.php';</script>";
} else { //header("location:Edit-staff.php");
    echo "<script> window.location.href = 'reviewerslist-edit.php';</script>";
}

?> 