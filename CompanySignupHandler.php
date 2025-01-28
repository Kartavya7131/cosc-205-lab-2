<?php
session_start();
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = connectDB();

    $companyName = fixInput($_POST['cname']);
    $companyDescription = fixInput($_POST['cdesc']);
    $email = fixInput($_POST['email']);
    $pass = fixInput($_POST['password']);
    $industry = fixInput($_POST['industry']);
    $CEOName = fixInput($_POST['ceoname']);
    $YearRev = fixInput($_POST['yearrevenu']);
    $empCount = fixInput($_POST['employeeCount']);
    $yearFounded = fixInput($_POST['yearfounded']);

    $sprintf = sprintf("INSERT INTO %s values ('%s', '%s', '%s', SHA1('%s'), '%s', '%s', %d, %d, %d)", "employer", $companyName, $companyDescription, $email, $pass, $industry, $CEOName, $YearRev, $empCount, $yearFounded);

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