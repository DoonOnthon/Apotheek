<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<header>
<!-- include logo / menu -->
<?php
include "includes/logo.php";
include "includes/menu.php";
?>
</header>
<!-- Login form -->
<div class="loginform">
<section class ="login-form">
    <h2>Log in</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email..."> </br>
</br>
        <input type="password" name="pwd" placeholder="password..."> </br>
</br>
        <button type="submit" name="submit">Log in</button>
    </form>
</div>
    <?php
// Error handlers
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Vul alle velden in!</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p>de login informatie komt niet overheen/p>";
    }
}
?>
</sections>

</body>
</html>