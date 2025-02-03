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
    <form action="Handlers/ApplicationHandler.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="pdf_file" accept="application/pdf" required>
        <input type="hidden" name="jobId" value=<?php echo $_GET['jobId'];?>>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>