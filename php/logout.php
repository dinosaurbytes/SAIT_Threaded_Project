<!--
Logout page script
Author: Brian
Created: 2018-06
-->

<!-- Closes the user session -->
<?php
SESSION_START();

$_SESSION = array();
session_destroy();

header("Location: http://localhost/SAIT_Threaded_Project/login.php");

 ?>
