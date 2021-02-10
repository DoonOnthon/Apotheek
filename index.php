<!DOCTYPE html>
<html lang="en">
<head>
<script>src="myScript.js"</script>
    <script> </script>
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

<body>  
    <div class="slidercontainer">  
        <div class="showSlide fade">  
            <img src=".git/images/placeholderimage.png" width="600" height="300"> />  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <div class="showSlide fade">  
            <img src=".git/images/placeholder2.jpg" width="600" height="300"> />  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
  
        <div class="showSlide fade">  
            <img src=".git/images/placeholder3.jpg"width="600" height="300"> />  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <div class="showSlide fade">  
            <img src=".git/images/logop.png"width="600" height="300"> />  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)">❮</a>  
        <a class="right" onclick="nextSlide(1)">❯</a>  
    </div> 
    <script type="text/javascript">  
        var slide_index = 1;  
        displaySlides(slide_index);  
        function nextSlide(n) {  
            displaySlides(slide_index += n);  
        }  
        function currentSlide(n) {  
            displaySlides(slide_index = n);  
        }  
        function displaySlides(n) {  
            var i;  
            var slides = document.getElementsByClassName("showSlide");  
            if (n > slides.length) { slide_index = 1 }  
            if (n < 1) { slide_index = slides.length }  
            for (i = 0; i < slides.length; i++) {  
                slides[i].style.display = "none";  
            }  
            slides[slide_index - 1].style.display = "block";  
        }  
</script>   
</body>   

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
<div class ="news">
    <h4>Nieuws</h4>
    <?php
    ?>
</body>
</html>