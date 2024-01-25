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
    <title>Home | Friends Tutors</title>
    <link rel="icon" type="image/x-icon" href="../src/img/titlelogo.png">
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <?php
    require('./user_header.php');
    ?>

    <main>
    <div class="container">
            <div class="wrapper">
                <section class="col captions">
                    <h1>Gateway to Success Through Engaging, Insightful Quizzes! Empower your intellect at <span>Friends Tutor. </span></h1>
                    <a href="./user_quiz_select.php">Quiz</a>
                </section>
                <section class="col banner">
                    <img src="../src/img/quiz.svg" alt="Home Banner">
                </section>
            </div>
        </div>
    </main>

    <script src="../src/js/script.js"></script>
</body>
</html>