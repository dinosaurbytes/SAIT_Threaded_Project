<?php
SESSION_START();

$_SESSION = array();
session_destroy();

header("Location: http://localhost/SAIT_Threaded_Project/login.php");

 ?>
