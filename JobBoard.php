<?php
 session_start();
// include("dbconnect.php");
// $conn = connectDB();
// ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Jobs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <ul>
            <li>
                <form action="LoginPage.php">
                    <input type="submit" value="Login">
                </form>
            </li>
        </ul>
        <h1>Welcome to the Job Board</h1>
    <h1>Available Job Postings</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Type</th>
            <th>Location</th>
            <th>Apply</th>
        </tr>
        <?php
        // $query = "SELECT * FROM job_posting";
        // $result = mysqli_query($conn, $query);

        // while ($row = mysqli_fetch_assoc($result)) {
        //     echo "<tr>
        //             <td>{$row['Title']}</td>
        //             <td>{$row['Description']}</td>
        //             <td>{$row['Salary_Range']}</td>
        //             <td>{$row['Job_type']}</td>
        //             <td>{$row['location']}</td>
        //             <td>
        //                 <form method='post' action='applyJob.php'>
        //                     <input type='hidden' name='job_id' value='{$row['Job_ID']}'>
        //                     <input type='submit' value='Apply'>
        //                 </form>
        //             </td>
        //           </tr>";
        // }
        // mysqli_close($conn);
        // 
        ?>
    </table>
</body>
</html>
