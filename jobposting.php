<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Post a Job</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="topnav">
        <a class="active" href="JobBoard.php">Home</a>
    </div>
    <h1>Post a Job</h1>
    <form method="post" action="JobPostingHandler.php">
        <label for="title">Job Title:</label>
        <input type="text" name="title" placeholder="Title" required><br>

        <label for="description">Description:</label>
        <textarea name="description" placeholder="Description" required></textarea><br>

        <label for="salary">Salary Range:</label>
        <input type="text" name="salary" placeholder="ex: 10000-35000" required><br>

        <label for="type">Job Type:</label>
        <select name="type">
            <option>Full-Time</option>
            <option>Part-Time</option>
            <option>Internship</option>
        </select><br>

        <label for="location">Location:</label>
        <input type="text" name="location" placeholder="Location" required><br>

        <input type="submit" value="Post Job">
    </form>
</body>
</html>
