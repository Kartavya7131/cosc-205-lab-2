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
        <form action='Post'>
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <input type="submit">
        </form>

        <br>
        <a href="SignupPage.html">No Account? Sign Up</a>
    </body>
</html>