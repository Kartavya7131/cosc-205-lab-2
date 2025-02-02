<?php
    header('Content-Type: application/json');
    session_start();

    include "dbFunctions.php";

    $username = $_SESSION['Username'];
    $jobID = $_POST['id'];
    $email = $_SESSION['email'];
    $resume = $_POST['resume'];

    $sql = "INSERT INTO `stu_application`(`Username`, `Job_ID`, `Email`, `Resume`) VALUES ('$username',$jobID,'$email', LOAD_FILE('$resume'))";
    $result = QueryDB($sql);
?>