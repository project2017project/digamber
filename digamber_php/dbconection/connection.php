<?php
/*
if (!isset($_POST['imageBaseData'])) {
    include 'sample_security_code.php';
}*/
define('DB_TYPE', 'mysqli');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'webngigs_digamber');
define('SITEURL', 'http://www.digamber.org/');
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>