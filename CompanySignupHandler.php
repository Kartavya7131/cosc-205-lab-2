<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    

    $sql =  mysqli_connect("localhost", "cs213user", "letmein", "CourseFinalDB");

    header("Location: LoginPage.php");
    exit();
}

function fixInput($in) {
    $in = trim($in);
    $in = stripslashes($in);
    return $in;
}
?>