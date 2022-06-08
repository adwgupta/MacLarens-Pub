<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

   <head>
      <?php
      $pageTitle = 'MacLaren Pub';
      include("meta.php");
      ?>
   </head>

   <body class = "orange">
      <?php include("header.php") ?>
      <div class="headfix">
         <div class="cover parallax" id="hero-image">
            <h1 class="covertxt" id="covertxt2">MacLaren's Pub</h1>
            <h2 class="covertxt">Home of the legendary Barney Stinson</h2>
            <h3 class="covertxt">Legendary!</h3>
         </div>
      </div>

      <div>
         <img src="images/barney/barney.jpg" alt="suit up" class="gen-img2 rounded">
         <ul class="columns">
            <li>Bingo Tuesday!</li>
            <li>Thirsty Thursday Karaoke</li>
            <li>Speed Dating Friday</li>
         </ul>
      </div>


      <section class="norm-text">
         For pictures and stories about our past events
         <form action="https://www.barneystinsonblog.com/">
                <button class="button-dets button lightgrey">Click here</button>
            </form>
      </section>
      <hr>
      <?php include("footer.html") ?>
   </body>
</html>