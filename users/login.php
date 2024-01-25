<?php
session_start();
require('../includes/connection.php');
require('../functions/ui_functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Friends Tutors</title>
    <link rel="icon" type="image/x-icon" href="../src/img/titlelogo.png">
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <?php
    require('./user_header.php')
    ?>

    <main>
        <div class="login-container">
            <form action="" method="post">
                <h2>Login</h2>
                <div class="input-section">
                    <label for="username">Username : </label>
                    <input type="text" name="username" autocomplete="off" required="required">
                </div>
                <div class="input-section">
                    <label for="password">Password : </label>
                    <input type="password" name="password" autocomplete="off" required="required">
                </div>
                <div class="input-section">
                    <input type="submit" name="login-submit">
                    <a href="./signin.php">Create New Account</a>
                </div>
            </form>
        </div>
    </main>

    <script src="../src/js/script.js"></script>
</body>

</html>

<?php
if (isset($_POST['login-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_login = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    if($user_login) {
        if(mysqli_num_rows($user_login) > 0) {
            $_SESSION['username'] = $username;
            alertMessage('Success', 'Login success');
            echo("
                <script>
                setTimeout(() => {
                    window.location.href ='./user_home.php';
                }, 2000);
                </script>
                ");
        } else {
            alertMessage('Error', 'User Not Found');
            echo("
                <script>
                setTimeout(() => {
                    window.location.href ='./login.php';
                }, 2000);
                </script>
                ");
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>