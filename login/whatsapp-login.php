<?php require_once dirname(__DIR__) . './header.php';?> 
<!-- BEGIN HIER MET HET BOUWEN VAN DE USER INTERFACE VOOR HET LOGIN SCHERM -->
<!-- GEBRUIK HIERVOOR DE SCREENSHOT DIE IN TRELLO STAAT EN BOUW DIE NA SUCCES! -->

    <!-- Vanaf deze DIV begint het formulier -->
    <div class="container">
    <div class="login-form">
        <form action="login.php" method="post" type="">
            <label for="">Username</label><br>
            <input class="form-control" type="text" ><br><br>
            
            <label for="" type="password">Password</label><br>
            <input class="form-control" type="text"><br>

            <button class="btn btn-dark" type="submit">Login</button>
        </form>
    </div>
    </div>
    <!-- Vanaf de DIV hierboven eindigd het formulier -->

    <?php require_once dirname(__DIR__) . '/footer.php';?> 
