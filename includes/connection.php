<?php

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '1234';
$dbname = 'friends_tutors';

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn) {
    echo"ERROR".mysqli_error($con);
}

?>