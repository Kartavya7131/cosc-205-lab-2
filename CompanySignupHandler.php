<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql =  mysqli_connect("localhost", "cs213user", "letmein", "CourseFinalDB");

    $companyName = fixInput($_POST['cname']);
    $companyDescription = fixInput($_POST['cdesc']);
    $email = fixInput($_POST['email']);
    $pass = fixInput($_POST['password']);
    $industry = fixInput($_POST['industry']);
    $CEOName = fixInput($_POST['ceoname']);
    $YearRev = fixInput($_POST['yearrevenu']);
    $empCount = fixInput($_POST['employeeCount']);
    $yearFounded = fixInputq($_POST['yearfounded']);

    $query = mysqli_query($sql, "INSERT INTO employers values ('" . $companyName 
    . ", " . $companyDescription . ", " . $email . "', SHA1('" . $pass . "'), '"
    . $industry. ", " . $CEOName . ", " . $YearRev 
    . ", " . $empCount . ", " . $yearFounded . ")") or die(mysqli_error($sql));

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