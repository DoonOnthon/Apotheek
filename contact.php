<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<body>
<!-- include logo / menu -->
<?php
include "includes/logo.php";
include "includes/menu.php";
?>
<!-- Sign up form -->
<section class ="contact-form">
    <h2>Neem contact op</h2>
    <form action="includes/contact.inc.php" method="post">
        <input type="text" name="emailcontact" placeholder="E-mail"> </br>
        </br>
        <input type="text" name="message" placeholder="Bericht"> </br>
        </br>
        <button type="submit" name="submit2">Indienen</button>
    </form>
    <?php
?>
</sections>
</body>
</html>