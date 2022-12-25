<?php

include 'dbconection/connection.php';

$gender             = $_POST['gender'];
$fullname           = $_POST['fullname'];
$contactNumber      = $_POST['contactNumber'];
$email              = $_POST['email'];
$currentRole        = $_POST['currentRole'];
$totalExp           = $_POST['totalExp'];
$previousExp        = $_POST['previousExp'];
$message            = addslashes($_POST['message']);

$file = $_FILES['uploadfile']['name']; 
$mypicname = $file;
$destination = "../images/career/" . $mypicname;

if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $destination)) {  
    
    $sql = "INSERT INTO `enquire` ( `gender`, 
                                    `fullname`, 
                                    `contactNumber`, 
                                    `email`, 
                                    `currentRole`, 
                                    `totalExp`, 
                                    `previousExp`, 
                                    `message`, 
                                    `uploadfile`)"
                        . " VALUES ('" . $gender . "', 
                                    '" . $fullname . "', 
                                    '" . $contactNumber . "', 
                                    '" . $email . "', 
                                    '" . $currentRole . "',
                                    '" . $totalExp . "',
                                    '" . $previousExp . "',
                                    '" . $message . "',
                                    '" . $mypicname . "')";
    $reg = $mysqli->query($sql);   
    header("location:career.php?status=success");                                 
} else {
    echo "Please subimt Again";
}
?> 