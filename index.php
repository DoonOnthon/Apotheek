<?php 
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<div class="slideshow">
<img class="mySlides" src=".git/images/placeholderimage.png" alt="placeholder" width="600" height="300">
<img class="mySlides" src=".git/images/placeholder2.jpg" alt="placeholder" width="600" height="300">
<img class="mySlides" src=".git/images/placeholder3.jpg" alt="placeholder" width="600" height="300">
<img class="mySlides" src=".git/images/logop.png" alt="placeholder" width="600" height="300">
<button class="button-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="button-right" onclick="plusDivs(+1)">&#10095;</button>
</div>
 <!-- java script-->
    <script type="text/javascript">  
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>     

<!--google maps map -->
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
<!--Herhaalservice-->
<div class ="herhaal">
<a href="herhaal.php">Herhaal service</a>
</div>
<!--medicine overview-->
<div class ="medicin">
<a href="medicin.php">Medicijnen overzicht</a>
</div>
<!--register-->`
<div class ="register">
<a href="register.php">Inschrijven</a>
</div>
<!-- open times -->
<div class ="times">
    <h4>opening times</h4>
    <p>monday to friday: 10:00 - 16:00</p>
    <p>saturday to sunday : closed</p>
</div>
<!-- adresses -->
</div>
<div class ="adress">
<h4> adress </h4>
<p>adress : placeholder </p>
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
          echo $row['subject'] . "<br>";
        }
      }
    ?>
</body>
</html>