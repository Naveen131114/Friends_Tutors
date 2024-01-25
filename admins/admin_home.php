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
    <title>Admin Home | Friends Tutors</title>
    <link rel="icon" type="image/x-icon" href="../src/img/titlelogo.png">
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <?php
    require('./admin_header.php');
    ?>

    <main>
        <hr>
        <div class="admin-container">
            <section class="sidebar">
                <ul>
                    <li><a href="admin_home.php?subject">Subject</a></li>
                    <li><a href="admin_home.php?class">Class</a></li>
                    <li><a href="admin_home.php?questions">Questions</a></li>
                    <li><a href="admin_home.php?results">Results</a></li>
                    <li><a href="admin_home.php?users">Users</a></li>
                </ul>
            </section>
            <section class="admin-main">
               <?php

                if(!isset($_GET['subject']) && !isset($_GET['class']) && !isset($_GET['questions']) && !isset($_GET['results']) && !isset($_GET['users']) && !isset($_GET['profile'])){
                        echo("home wedqed");
                } 

                if(isset($_GET['subject'])) {
                    echo("subject");
                } 
                
                if(isset($_GET['class'])) {
                    echo("class");
                } 
                
                if(isset($_GET['questions'])) {
                    echo("questions");
                } 
                
                if(isset($_GET['results'])) {
                    echo("results");
                } 
                
                if(isset($_GET['users'])) {
                    echo("users");
                }
               
                if(isset($_GET['profile'])) {
                    include('./admin_profile.php'); 
                }

        
                ?>
            </section>
        </div>
    </main>

    <script src="../src/js/script.js"></script>
</body> 
</html>