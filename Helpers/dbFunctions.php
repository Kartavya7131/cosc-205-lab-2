<?php
function connectDB() {
    $conn = mysqli_connect("localhost", "cs205user", "letmein", "job_board");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function QueryDB($query){
    $conn = connectDB();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    return $result;
}
?>
