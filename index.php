<?php
session_start();
require_once dirname(__DIR__) . '/whatsapp-clone/header.php';

if (isset($_SESSION['user_id']) == NULL) {
    $error = "Je bent nog niet ingelogd!";
    header("location: /login/whatsapp-login.php?error=$error");
} else {

}
?>

<div class="left-sidebar">


    <div class="navbar-container">
        <div class="nav-wrapper">
            <div class="nav-header">
                <h2>Chats</h2>
                <p>...</p>
            </div>
            <!-- TODO fix ajax search -->
            <div class="nav-searchbar">
                <input class="d-searchbar" type="text" placeholder="Search..." oninput="searchUsers()">
            </div>
        </div>

        <div class="nav-chats">
            <?php 
            $users = query("SELECT * FROM users")
            ?>
            <?php foreach($users as $user): ?>
                    <div class="quick-chat">
                        <div class="quick-user-pic">
                            <a href="/profiles/friend-profile.php">
                                <img src="/storage/user.webp" alt="">
                            </a>
                        </div>
            
                        <div class="user-content">
                            <div class="user-name"><?php echo $user['name'];?></div>
                            <p>Recent message</p>
                        </div>
            
                        <div class="recent-msg-time">
                            <p>17:35</p>
                        </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="main">

</div>

<?php require_once dirname(__DIR__) . '/whatsapp-clone/footer.php'; ?>

