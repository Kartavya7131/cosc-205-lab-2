<?php
session_start();
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $sql = connectDB();

    $fname = fixInput($_POST['fname']);
    $lname = fixInput($_POST['lname']);
    $age = fixInput($_POST['age']);
    $email = fixInput($_POST['email']);
    $user = strtolower(fixInput($_POST['username']));
    $pass = fixInput($_POST['password']);
    $education = fixInput($_POST['education']);

    $sprintf = sprintf("INSERT INTO %s values ('%s', SHA1('%s'), '%s', '%s', %d, '%s', '%s')", "student", $user, $pass, $fname, $lname, $age, $email, $education);

    $query = mysqli_query($sql, $sprintf) or die(mysqli_error($sql));

    $_SESSION['email'] = $email;

    header("Location: LoginPage.php");
    exit();
}

function fixInput($in) {
    $in = trim($in);
    $in = stripslashes($in);
    return $in;
}
?>