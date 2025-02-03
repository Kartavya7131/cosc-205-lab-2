<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
</head>
<body>
    <h2>Upload Your Resume</h2>
    <form action="jobposting.php" method="POST">
        <input type="file" name="pdf_file" accept="application/pdf" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>

<?php
    header('Content-Type: application/json');
    session_start();

    include "dbFunctions.php";

    if (!isset($_SESSION["LoggedIn"])){
        $_SESSION["LoggedIn"] = false;
        $_SESSION['isStudent'] = true;
    }

    $username = $_SESSION['Username'];
    $jobID = $_GET['jobId'];
    $email = $_SESSION['email'];

    if (isset($_POST['submit'])) {
        // Get file details
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];

        // Read file content
        $pdfData = file_get_contents($fileTmpName);

        $sql = "INSERT INTO `stu_application`(`Username`, `Job_ID`, `Email`, `File_Name`, `Resume`) VALUES ('$username', $jobID , '$email', '" . $_FILES['pdfFile'] . "', '" . $pdfData . "')";
        $result = QueryDB($sql);
    }

?>