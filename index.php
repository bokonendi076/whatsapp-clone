<?php
session_start();
if (isset($_SESSION['user_id']) == NULL) {
    $error = "Je bent nog niet ingelogd";
    header("location: ./login/whatsapp-login.php?error=$error");
} else {

}
?>

