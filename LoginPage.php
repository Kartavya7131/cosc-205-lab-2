<!DOCTYPE html>

<?php
    session_start();

    if (!isset($_SESSION['email'])){
        $_SESSION['email'] = "";
    }

    if ($_SESSION["LoggedIn"]){
        header("Location: JobBoard.php");
        exit();
    }
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="topnav">
        <a class="active" href="JobBoard.php">Home</a>
    </div>
        <form action="Handlers/LoginHandler.php" method="POST">
            <input type="text" name="email" placeholder="Email" value=<?php echo $_SESSION['email'];?>>
            <input type="password" name="password" placeholder="Password">
            <input type="submit">
        </form>

        <br>
        <a href="SignupPage.html">No Account? Sign Up</a>
    </body>
</html>