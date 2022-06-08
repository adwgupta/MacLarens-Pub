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
         <h3 class="covertxt">Drinks! Craic! Vibes!</h3>
      </div>
   </div>

   <div class="norm-text intro-text">
      Kids, we're about to tell you an incredible story, the story of how the owners met you.
      <br> Having freshly met the love of his life at the time, our star bartenders and owners, Jed and Swarley decided to open a bar with
      a very simple mission statement:
      <br> "At this bar, there would be no last call!" And from there on, MacLaren's was born.
      <br> A bar where there would be no last call, where the glasses would be cleaned only after everyone has had the best night of their lives
   </div>

   <div class="drinks">
      <h1 class="gen-title">Some of our perfect drinks</h1>
      <div class="gen-fcontain diff-drinks">
         <a href="drinks.php#beer">
            <div class="sample-drink darkgreen rounded">
               <div class="drink-pic">
                  <div>
                     <h2 class="gen-title">A Perfect Pint</h2>
                  </div>
                  <img src="images/drinks/guiness.jpg" alt="perfect pint" class="gen-img rounded">
               </div>
               <h3 class="norm-text">Pints</h3>
            </div>
         </a>

         <a href="drinks.php#cocktails">
            <div class="sample-drink darkgreen rounded">
               <div class="drink-pic">
                  <div>
                     <h2 class="gen-title">A Perfect Cocktail</h2>
                  </div>
                  <img src="images/drinks/cocktail.jpg" alt="perfect cocktail" class="gen-img rounded">
               </div>
               <h3 class="norm-text">Cocktails</h3>
            </div>
         </a>
         
         <a href="drinks.php#shots">
            <div class="sample-drink darkgreen rounded">
               <div class="drink-pic">
                  <div>
                     <h2 class="gen-title">A Perfect Shot</h2>
                  </div>
                  <img src="images/drinks/shot.jpg" alt="perfect shot" class="gen-img rounded">
               </div>
               <h3 class="norm-text">Shots</h3>
            </div>
         </a>
      </div>
   </div>

    <?php include("footer.html") ?>
</body>
</html>