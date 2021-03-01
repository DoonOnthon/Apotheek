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
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="password...">
        <input type="password" name="pwdrepeat" placeholder="repeat password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Vul alle velden in!</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Kies een goede username</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Kies een goede email</p>";
    }
        else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Wachtwoorden komen niet overheen</p>";
    }
        else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Er ging iets verkeerd probeer nogmaals</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
        echo "<p>De gebruikersnaam is al in gebruik</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>Je bent geregistreerd</p>";
    }
}
?>
</sections>
</body>
</html>