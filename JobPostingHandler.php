<?php
    include "dbFunctions.php";
    include "InputFixer.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = fixInput($_POST["title"]);
        $desc = fixInput($_POST["description"]);
        $type = fixInput($_POST["type"]);
        $location = fixInput($_POST["location"]);

        $sal1 = number_format((int)$_POST["salarylow"], 0, '.', ',');
        $sal2 = number_format((int)$_POST["salaryup"], 0, '.', ',');

        $salRange = sprintf("$%s - $%s", $sal1, $sal2);

        $query = QueryDB("SELECT COUNT(*) as total FROM job_posting");

        $sprintf = sprintf("INSERT INTO %s values (%d, '%s', '%s', '%s', '%s', '%s', '%s')", "job_posting", NULL, $title, $desc, $salRange, $type, $location, $_SESSION['Username']);
        $query = QueryDB($sprintf);

        header("Location: JobBoard.php");
        exit();
    }
?>