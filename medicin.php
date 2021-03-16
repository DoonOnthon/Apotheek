<?php 

include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicin overview</title>
</head>
<body>
<header>
    <?php
    include "includes/logo.php";
    include "includes/menu.php";
    ?>
</header>
    <!-- Medicin overview -->
<div class="info">
<div class ="overzicht">
    <h4>Medicijnen overzicht</h4>
    <?php
    $medsort = "SELECT *
    FROM overzicht
    ORDER BY content ASC;";
      $result = mysqli_query($conn, $medsort);
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