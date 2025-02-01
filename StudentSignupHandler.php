<?php
    session_start();
    include "InputFixer.php";
    include "dbFunctions.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = fixInput($_POST['fname']);
        $lname = fixInput($_POST['lname']);
        $age = fixInput($_POST['age']);
        $email = fixInput($_POST['email']);
        $user = strtolower(fixInput($_POST['username']));
        $pass = fixInput($_POST['password']);
        $education = fixInput($_POST['education']);

        $sprintf = sprintf("Select * from %s where Email='%s'", "student", $email);
        $result = QueryDB($sprintf);

        if (mysqli_num_rows($result) <= 0){
            $sprintf = sprintf("INSERT INTO %s values ('%s', SHA1('%s'), '%s', '%s', %d, '%s', '%s')", "student", $user, $pass, $fname, $lname, $age, $email, $education);
            $query = QueryDB($sprintf);

            $_SESSION['email'] = $email;

            header("Location: LoginPage.php");
            exit();
        }
        else {
            header("Location: StudentSignup.html");
            exit();
        }
    }
?>