<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   $pageTitle = 'Contact & Support';
   include("meta.php");
   ?>
</head>

<body class="lightblue">
   <?php include("header.php") ?>
   <div class="header-fix">
      <div class="cover parallax" id="hero-image">
         <h1 class="covertxt" id="covertext2">Get in touch</h1>
         <h2 class="covertxt">We'd love to hear back from you <br>We're here to help!</h2>
      </div>   
   </div>

   <div>
      <form action="mailto:contact@yourdomain.com"
         method="POST"
         enctype="multipart/form-data"
         name="EmailForm">
         Name:<br>
         <input type="text" size="19" name="Contact-Name"><br><br>
         Email:<br>
         <input type="email" name="Contact-Email"><br><br> 
         Message:<br> 
         <textarea name="Contact-Message" rows="6″ cols="20″>
         </textarea><br><br> 
         <button type="submit" value="Submit">Send</button>
      </form>  
      <hr>
   </div>
   <?php include("footer.html") ?>
</body>

</html>