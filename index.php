<!DOCTYPE html>
<html lang="en">
<head>
    <script src=""></script>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('logo.php')
    ?>
<!-- Top navigation menu -->
<?php
include('menu.php')
?>
<!--slideshow place holder -->
<img src=".git/images/placeholderimage.png" alt="placeholder" width="600" height="300">
<!-- google maps map -->
<div class="map-container">
    <div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="300" height="300" id="gmap_canvas"
 src="https://maps.google.com/maps?q=schagen&t=&z=13&ie=UTF8&iwloc=&output=embed"
  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <br>
    </div>
    </div>
</div>

    <?php
    ?>
</body>
</html>