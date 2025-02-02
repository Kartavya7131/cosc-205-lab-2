<?php
   session_start();
   include "dbFunctions.php";
   include "JobRenderer.php";
   $conn = connectDB();

    if (!isset($_SESSION["LoggedIn"])){
        $_SESSION["LoggedIn"] = false;
        $_SESSION['isStudent'] = true;
    }


?>
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