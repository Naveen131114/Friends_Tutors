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
    <title>Signin | Friends Tutors</title>
    <link rel="icon" type="image/x-icon" href="../src/img/titlelogo.png">
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <?php
    require('./user_header.php')
    ?>

    <main>
        <div class="signin-container">
            <form action="" method="post">
                <h2>Create New Account</h2>
                <div class="input-section">
                    <label for="username">Username : </label>
                    <input type="text" name="username" autocomplete="off" required="required">
                </div>
                <div class="input-section">
                    <label for="email">Email : </label>
                    <input type="email" name="email" autocomplete="off" required="required">
                </div>
                <div class="input-section">
                    <label for="mobileno">Mobile No : </label>
                    <input type="number" name="mobileno" autocomplete="off" required="required">
                </div>
                <div class="input-section">
                    <label for="Gender">Gender : </label>
                    <div class="gender">
                        <label><input type="radio" name="gender" value="Male" autocomplete="off" required="required">&nbsp;Male</label>
                        <label><input type="radio" name="gender" value="Female" autocomplete="off" required="required">&nbsp;Female</label>
                        <label><input type="radio" name="gender" value="Others" autocomplete="off" required="required">&nbsp;Others</label>
                    </div>
                </div>
                <div class="input-section">
                    <label for="password">Password : </label>
                    <input type="password" name="password" autocomplete="off" required="required">
                </div>
                <div class="input-section">
                    <input type="submit" name="signin-submit">
                    <a href="./login.php">If You already have a account</a>
                </div>
            </form>
        </div>
    </main>

    <script src="../src/js/script.js"></script>
</body>

</html>
<?php
if (isset($_POST['signin-submit'])) {
    $userid = '';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $username_checking = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if ($username_checking) {
        if (mysqli_num_rows($username_checking) > 0) {
            alertMessage('Error', 'Username is already taken');
        } else {
            $insert_new_user = mysqli_query($conn, "INSERT INTO users VALUES('$userid', '$username', '$email', $mobileno, '$gender', '$password')");
            if ($insert_new_user) {
                $_SESSION['username'] = $username;
                alertMessage('Success', 'Account Created Successfully');
                echo("
                <script>
                setTimeout(() => {
                    window.location.href ='./login.php';
                }, 2000);
                </script>
                ");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>