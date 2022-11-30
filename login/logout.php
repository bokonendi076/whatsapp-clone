<?php 
session_start();
session_unset();
session_destroy();
$_SESSION = array();
$_SESSION['loggedIn'] = false;
header("location: ./whatsapp-login.php");
exit;
?>