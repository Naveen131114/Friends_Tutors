<header>
    <div class="logo">
        <a href="../index.php"><img src="../src/img/logo.png" alt="Friends Tutors Logo" /></a>
    </div>
    <?php
    if (isset($_SESSION['username'])) {
        echo ("
        <div class='btn-wrapper'>
            <span><a href='./user_profile.php'><img src='../src/icons/profile.png' class='profile-icon' alt='Profile Icon'></a></span>
            <span><strong>" . $_SESSION['username'] . "</strong></span>
            <a class='logout-btn' href='user_logout.php'>Logout</a>
        </div>
        ");
    } else {
        echo("
        <div class='btn-wrapper'>
            <a href='./login.php' class='login-btn'>Login</a>
            <a href='./signin.php' class='signin-btn'>Create New Account</a>
        </div>
        ");
    }
    ?>
</header>