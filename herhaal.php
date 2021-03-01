<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Top navigation menu & logo-->
<?php
include "includes/logo.php";
include "includes/menu.php";

if (isset($_SESSION["useruid"])) {
    header("Location: herhaal2.php");
}
else {
    header("Location: login.php");
}

?>
</body>
</html>