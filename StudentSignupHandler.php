<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = fixInput($_POST['fname']);
    $lname = fixInput($_POST['lname']);
    $age = fixInput($_POST['age']);
    $email = fixInput($_POST['email']);
    $user = fixInput($_POST['username']);
    $pass = fixInput($_POST['password']);
    $education = fixInput($_POST['education']);

    $sql =  mysqli_connect("localhost", "cs213user", "letmein", "CourseFinalDB");

    $query = mysqli_query($sql, "INSERT INTO student values ('" . strtolower($user) 
    . "', SHA1('" . $pass . "'), '"
    . $fname . ", " . $lname . ", " . $age 
    . ", " . $email . ", " . $education . ")") or die(mysqli_error($sql));

    $_SESSION['username'] = $user;

    header("Location: LoginPage.php");
    exit();
}

function fixInput($in) {
    $in = trim($in);
    $in = stripslashes($in);
    return $in;
}
?>