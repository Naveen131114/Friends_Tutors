<header>
    <div class="logo">
        <a href="./admin_login.php"><img src="../src/img/logo.png" alt="Friends Tutors Logo" /></a>
    </div>
    <?php
    if (isset($_SESSION['adminusername'])) {
        echo ("
        <div class='btn-wrapper'>
            <span><a href='./admin_home.php?profile'><img src='../src/icons/profile.png' class='profile-icon' alt='Profile Icon'></a></span>
            <span><strong>" . $_SESSION['adminusername'] . "</strong></span>
            <a class='logout-btn' href='admin_logout.php'>Logout</a>
        </div>
        ");
    } 
    ?>
</header>