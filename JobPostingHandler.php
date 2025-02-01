<?php
    include "dbFunctions.php";
    include "InputFixer.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db = connectDB();

        $title = fixInput($_POST["title"]);
        $desc = fixInput($_POST["description"]);
        $salRange = fixInput($_POST["salary"]);
        $type = fixInput($_POST["type"]);
        $location = fixInput($_POST["location"]);
    }
?>