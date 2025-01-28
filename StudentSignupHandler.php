<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = fixInput($_POST['First_Name']);
    $lname = fixInput($_POST['Last_Name']);
    $age = fixInput($_POST['Age']);
    $email = fixInput($_POST['Email']);
    $user = fixInput($_POST['Username']);
    $pass = fixInput($_POST['Password']);
    $education = fixInput($_POST['Education']);
    $fileUpload = $_FILES['Resume']['tmp_name'];

    $sql =  mysqli_connect("localhost", "cs213user", "letmein", "CourseFinalDB");

    $query = mysqli_query($sql, "INSERT INTO student values ('" . strtolower($user) 
    . "', SHA1('" . $pass . "'), '"
    . $fname . ", " . $lname . ", " . $age 
    . ", " . $email . ", " . $education . ", " . file_get_contents($fileUpload) . ")") or die(mysqli_error($sql));

    $_SESSION['username'] = $user;

    header("Location: LoginPage.php");
    exit();
}

function fixInput($in) {
    $in = trim($in);
    $in = stripslashes($in);
    return $in;
}

$target_path = tmp_name;
        
$target_path = $target_path . basename($_FILES['fileupload']['name']);

    // if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path)) {
    //         echo "The file \"". basename($_FILES['fileupload']['name']). 
    //             "\" has been uploaded. <br />";
    //            echo '<a href="userlogin.php">Back to your page</a>';
    // } else {
    //         echo "There was an error uploading the file, please try again! <br />";
    // }
?>