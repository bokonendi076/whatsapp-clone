<?php 
session_start();
session_status();
require_once dirname(__DIR__) . './header.php';
?> 
<!-- BEGIN HIER MET HET BOUWEN VAN DE USER INTERFACE VOOR HET LOGIN SCHERM -->
<!-- GEBRUIK HIERVOOR DE SCREENSHOT DIE IN TRELLO STAAT EN BOUW DIE NA SUCCES! -->

    <!-- Vanaf deze DIV begint het formulier -->
    
<div class="container">
    <div class="login-form">
        <h1 class="login-form-title">Login om WhatsApp op uw computer te gebruiken</h1>
        <form action="login.php" method="POST">
            <input type="hidden" name="action" value="login">

            <?php 
            if (isset($_GET['msg'])) {
                echo '<p class="error-msg">' . $_GET['msg'] . '</p>';
            }
            ?>

            <input class="form-control" type="text" name="username" placeholder="username"><br><br>
            <input class="form-control" type="password" name="password" placeholder="password"><br>

            <button class="btn btn-dark" type="submit" value="submit">Login</button>
        </form>
    </div>
    <!-- Vanaf de DIV hierboven eindigd het formulier -->


    <?php require_once dirname(__DIR__) . '/footer.php';?> 
