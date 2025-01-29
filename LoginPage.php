<!DOCTYPE html>

<?php
    session_start();
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <form action='LoginHandler.php' method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit">
        </form>

        <br>
        <a href="SignupPage.html">No Account? Sign Up</a>
    </body>
</html>