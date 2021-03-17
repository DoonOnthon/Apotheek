<?php 
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<!-- Top navigation menu & logo-->
<header>
<?php
include "includes/logo.php";
include "includes/menu.php";
?>
</header>
<!--slideshow place holder -->
<div class="slideshow">
<img class="mySlides" src=".git/images/stock1.jpg" alt="stock image 1" width="600" height="300">
<img class="mySlides" src=".git/images/stock2.jpg" alt="stock image 2" width="600" height="300">
<img class="mySlides" src=".git/images/stock3.jpg" alt="stock image 3" width="600" height="300">
<img class="mySlides" src=".git/images/pharmstock3.jpg" alt="pharm stock image" width="600" height="300">
</div>
 <!-- java script slide show-->
    <script type="text/javascript">  
var slideIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<!--google maps map -->
<div class="map-container">
    <div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="300" height="300" id="gmap_canvas"
 src="https://maps.google.com/maps?q=Westerduinweg%203,%201755%20LE%20Petten&t=&z=13&ie=UTF8&iwloc=&output=embed"
  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <br>
    </div>
    </div>
</div>
<!--Midden menu-->
<section class = "midden menu">
<?php
include "includes/midmenu.php";
?>
<!-- open times -->
<div class ="times">
    <h4>openings tijden</h4>
    <p>maandag tot vrijdag: 10:00 - 16:00</p>
    <p>zaterdag tot zondag : dicht</p>
</div>
<!-- adresses -->
</div>
<div class ="adress">
<h4> adres </h4>
<p>adres : Westerduinweg 3, 1755 LE Petten </p>
</div>
<!-- nieuws -->
<div class ="news">
    <h4>Nieuws</h4>
    <?php
      $sql = "SELECT * FROM nieuws1;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['content'] . "<br>"; 
        }
      }
    ?>
</body>
</html>