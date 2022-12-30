<?php 
session_start();
require_once dirname(__DIR__) . './db.php';;

if ($_POST['action'] == 'login') {

    $sql = "SELECT * FROM users WHERE name = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        ':username' => $_POST['username'],
        ':password' => $_POST['password']
    ));

    if ($stmt->rowCount() < 1) {
        $msg = "Gebruiker niet gevonden...";
        header("location: ../login/whatsapp-login.php?msg=$msg");
        exit;
    }

    // query haalt alle ingelogde gebruiker op
    $user = $stmt->fetch();

    // query haalt alle gebruikers op uit de database
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['name'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['loggedIn'] = true;

    $msg = "je bent ingelogd.";
    header("location: ../index.php?msg=$msg");
    exit;
}
?>