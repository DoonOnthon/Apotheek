<?php 
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gezondheidsinformatie</title>
</head>
<body>
    <?php
    include "logo.php";
    include "menu.php";
    ?>
    <!-- Medicin overview -->
<div class="info">
<div class ="overzicht">
    <h4>Medicijnen overzicht</h4>
    <?php
      $sql = "SELECT * FROM overzicht;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['content'] . "<br>";
        }
      }
    ?>
</div>
</div>
</body>
</html>