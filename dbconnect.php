<?php
function connectDB() {
    $conn = mysqli_connect("localhost", "cs205user", "letmein", "job_board");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
?>
