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
<!-- include logo / menu -->
<?php
include "includes/logo.php";
include "includes/menu.php";
?>
<section class ="signup-form">
    <h2>Log in</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="password...">
        <button type="submit" name="submit">Log in</button>
    </form>
    <?php
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