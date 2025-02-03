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
<html>
<head>
    <title>View Jobs</title>
    <link rel="stylesheet" href="styles.css">
    <script src="JobBoardBtn.js" defer></script>
</head>
<body>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <?php
            if ($_SESSION["LoggedIn"]){
                $userName = $_SESSION['Username'];
                echo "<a href='LogoutHandler.php'>Log out</a>";
                echo "<a class='username'>$userName</a>";
                if(!$_SESSION['isStudent']){
                    echo "<a href='jobposting.php'>Create Posting</a>";
                }
            }
            else
            {
                echo "<a href='LoginPage.php'>Login</a>";
            }
        ?>
    </div>


    <h1>Welcome to the Job Board</h1>
    <h1>Available Job Postings</h1>
    
    <table id="Helper">
        <tr>
            <th>Title</th>
            <th>Company</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Type</th>
            <th>Location</th>
            <?php
                if ($_SESSION['LoggedIn'] && $_SESSION["isStudent"]){
                    echo "<th>Apply</th>";
                }
            ?>
        </tr>
        <?php

        $query = "SELECT * FROM job_posting";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            RenderJobPosting($row['Job_ID'], $row['Title'], $row['Company_Name'], $row['Description'], $row['Salary_Range'], $row['Job_type'], $row['location'], $_SESSION['LoggedIn'] && $_SESSION["isStudent"]);
        }
        mysqli_close($conn);
        
        ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>
