<?php
    session_start();
    include "dbFunctions.php";
    include "JobPostingHandler.php";
    $conn = connectDB();

    if (!isset($_SESSION["LoggedIn"])){
        $_SESSION["LoggedIn"] = false;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Jobs</title>
    <link rel="stylesheet" href="styles.css">
    <script src="JobBoardBtn.js" defer></script>
</head>
<body>
    <h1>Welcome to the Job Board</h1>
    <h1>Available Job Postings</h1>
    
    <table id="Helper">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Type</th>
            <th>Location</th>
            <?php
                if ($_SESSION['LoggedIn']){
                    echo "<th>Apply</th>";
                }
            ?>
        </tr>
        <?php

        $query = "SELECT * FROM job_posting";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            RenderJobPosting($row['Job_ID'], $row['Title'], $row['Description'], $row['Salary_Range'], $row['Job_type'], $row['location'] ,$_SESSION['LoggedIn']);
        }
        mysqli_close($conn);
        
        ?>
    </table>
    
    <!-- New Button For Login and Create POst <Unfinished>
    <div>
        <button class='LoginButton'>Login</button>
        <button class='CreatePostButton'>Add Post</button>
    </div> -->

    <form action="LoginPage.php" id="loginButton">
        <input type="submit" value="Login">
    </form>
    <form action="jobposting.php" id="CreatePost">
        <input type="submit" value="create job posting">
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>
