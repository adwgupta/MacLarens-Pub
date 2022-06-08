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
         <h1 class="covertxt" id="covertxt2">Drinks Menu</h1>
      </div>
      <hr>
      <div class="lists">
         <div id="beer">
            <h2 class="normal-text">Beer</h2>
            <img src="images/drinks/beer.jpg" alt="beer" class="drink-pic2 rounded">
            <ul class="columns">
               <li>Guiness - €5.60</li>
               <li>Orchard Thieves - €4.50</li>
               <li>Fosters - €4 </li>
               <li>Bullmers - €4.50</li>
            </ul>
         </div>

         <div id="cocktails">
         <h2 class="normal-text">Cocktails</h2>
            <img src="images/drinks/cocktails.jpg" alt="cocktails" class="drink-pic2 rounded">
            <ul class="columns">
               <li>Blue Margarita - €12</li>
               <li>Minnesota Tidal Wave - €12</li>
               <li>The Little Bear - €12 </li>
               <li>The Little Pup - €12</li>
            </ul>
         </div>

         <div id="dashes">
            <h2 class="normal-text">Dashes</h2>
            <img src="images/drinks/dash.jpg" alt="dashes" class="drink-pic2 rounded">
            <ul class="columns">
               <li>Vodka Dash - €5.60</li>
               <li>Morgan Dash - €5.60</li>
               <li>Caribbean Dash - €4 </li>
               <li>Jack Dash - €4.50</li>
            </ul>
         </div>

         <div id="shots"> 
            <h2 class="normal-text">Shots</h2>
            <img src="images/drinks/shots.jpg" alt="shots" class="drink-pic2 rounded">
            <ul class="columns">
               <li>Baby Guiness - €5.60</li>
               <li>Tequila - €4.50</li>
               <li>Fireball - €4 </li>
               <li>Sunday Special - €4.50</li>
               <li>3 shots for €9 </li>
            </ul>
         </div>

         <div id="food">
            <h2 class="normal-text">Food</h2>
            <img src="images/drinks/hotWings.jpg" alt="food" class="drink-pic2 rounded">
            <ul class="columns">
               <li>Chicken Wings - €5.60</li>
               <li>Bowl of Chips - €3</li>
               <li>Pizza - €12 </li>
               <li>Pork Ribs - €12</li>
            </ul>
         </div>
      </div>
   </div>
   <?php include("footer.html") ?>
</body>

</html>