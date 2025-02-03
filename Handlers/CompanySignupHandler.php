<?php
    session_start();
    include "../<Helpers>/InputFixer.php";
    include "../<Helpers>/dbFunctions.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $companyName = fixInput($_POST['cname']);
        $companyDescription = fixInput($_POST['cdesc']);
        $email = strtolower(fixInput($_POST['email']));
        $pass = fixInput($_POST['password']);
        $industry = fixInput($_POST['industry']);
        $CEOName = fixInput($_POST['ceoname']);
        $YearRev = fixInput($_POST['yearrevenu']);
        $empCount = fixInput($_POST['employeeCount']);
        $yearFounded = fixInput($_POST['yearfounded']);

        $sprintf = sprintf("Select * from %s where Email='%s'", "student", $email);
        $result = QueryDB($sprintf);

        if (mysqli_num_rows($result) <= 0){
            $sprintf = sprintf("INSERT INTO %s values ('%s', '%s', '%s', SHA1('%s'), '%s', '%s', %d, %d, %d)", "employer", $companyName, $companyDescription, $email, $pass, $industry, $CEOName, $YearRev, $empCount, $yearFounded);
            $query = QueryDB($sprintf);

            $_SESSION['email'] = $email;

            header("Location: LoginPage.php");
            exit();
        }
        else {
            header("Location: CompanySignup.html");
            exit();
        }
    }

    header("Location: LoginPage.php");
    exit();
?>