<?php
    include "dbFunctions.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db = connectDB();

        $email = $_POST["email"];
        $passwrd = $_POST["password"];

        $sprintf = sprintf("Select * from %s where Email = '%s'", "employer", $email);
        $result = QueryDB($sprintf);

        if (mysqli_num_rows($result) > 0){
            echo "Employer Logged In";
            $_SESSION['Email'] = $email;
            $_SESSION['isStudent'] = false;

            header("Location: JobBoard.php");
            exit();
        }
        else
        {
            $sprintf = sprintf("Select * from %s where Email='%s'", "student", $email);
            $result = QueryDB($sprintf);
            if (mysqli_num_rows($result) > 0){
                echo "Student Logged In";
                $_SESSION['Email'] = $email;
                $_SESSION['isStudent'] = true;

                header("Location: JobBoard.php");
                exit();
            }
            else {
                echo "No Login Found";
                header("Location: LoginPage.php");
                exit();
            }
        }
    }
?>