<?php
session_start();
if(isset($_SESSION['adminusername'])){
    echo ("
    <script>
            window.location.href ='./admin_home.php';
    </script>
    ");
}

require('../includes/connection.php');
require('../functions/ui_functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Friends Tutors</title>
    <link rel="icon" type="image/x-icon" href="../src/img/titlelogo.png">
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <main>
        <div class="login-container">
            <form action="" method="post">
                <h2>Admin Login</h2>
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

    $admin_login = mysqli_query($conn, "SELECT * FROM admins WHERE username='$username' AND password='$password'");

    if($admin_login) {
        if(mysqli_num_rows($admin_login) > 0) {
            $_SESSION['adminusername'] = $username;
            alertMessage('Success', 'Login success');
            echo("
            <script>
            setTimeout(() => {
                window.location.href ='./admin_home.php';
            }, 2000);
            </script>
            ");
        } else {
            alertMessage('Error', 'User Not Found');
            echo("
            <script>
            setTimeout(() => {
                window.location.href ='./admin_login.php';
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