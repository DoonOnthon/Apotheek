<!--Start the session-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Top navigation menu -->
<div class="menu">
<a class="active" href="index.php">Home</a>
<a href="service">Service</a>
<a href="gezondheidsinformatie.php">Voorlichting</a>
<?php
if (isset($_SESSION["useruid"])) {
    echo "<a href='profile.php'>Profiel pagina</a>";
    echo "<a href='includes/logout.inc.php'>Log uit</a>";
}
else {
    echo "<a href='login.php'>Login</a>";
    echo "<a href='signup.php'>Sign up</a>";
}
?>
</div>
</body>
</html>