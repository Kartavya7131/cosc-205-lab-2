<?php
    session_start();
    include "../<Helpers>/dbFunctions.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_SESSION['Username'];
        $jobID = $_POST['jobId'];
        $email = $_SESSION['Email'];

        // Get file details
        $fileName = $_FILES['pdf_file']['name'];
        $fileTmpName = $_FILES['pdf_file']['tmp_name'];

        // Read file content
        $pdfData = file_get_contents($fileTmpName);
        $pdfData = addslashes($pdfData);
        
        $sql = sprintf("INSERT INTO %s values ('%s', %d, '%s', '%s')", "stu_application", $username, $jobID, $email, $pdfData);
        $result = QueryDB($sql);
    }

    header("Location: ../LoginPage.php");
    exit();
?>