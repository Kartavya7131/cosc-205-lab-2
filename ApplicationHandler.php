<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Upload Your Resume</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="pdf_file" accept="application/pdf" required>
        <br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>
<?php
    session_start();
    include "dbFunctions.php";
    include "JobRenderer.php";

    $username = $_SESSION['Username'];
    $jobID = $_GET['jobId'];
    $email = $_SESSION['Email'];

    if (isset($_POST['submit'])) {
        // Get file details
        $fileName = $_FILES['pdf_file']['name'];
        $fileTmpName = $_FILES['pdf_file']['tmp_name'];

        // Read file content
        $pdfData = file_get_contents($fileTmpName);
        $pdfData = addslashes($pdfData);
        
        $sql = sprintf("INSERT INTO %s values ('%s', %d, '%s', '%s')", "stu_application", $username, $jobID, $email, $pdfData);
        $result = QueryDB($sql);

        header("Location: LoginPage.php");
        exit();
    }
?>