<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'About Us';
    include("meta.php");
    ?>
</head>

<body class="lightblue">
   <?php include("header.php") ?>

   <img src="images/info/logo.jpg" alt="name/logo" class="logo-container2">

   <section class="norm-text intro-text">
      MacLaren's is a pub that has stood the test of time!<br>
      We have seen people get married, couples breaking up, the birth of children heck we once even had Lorenzo Von Matterhorn!
      <br>
      All of our drinks are freshly sourced and guaranteed to satisfy your alcoholic needs, as long as you are vomit free since '03!
      <br>
      So come on down and have a pint, just remember no falling in love with your ex's and enjoy, it's going to be legend-wait for it and we hope you're not lactose intolerant because the second hal of that word is DAIRY!
      <br>
      LEGENDARY!
   </section>

   <section class =norm-text intro-text>
      <h2 class="gen-title"> Our Star-Studded Team!</h2>
      
      <div class="gen-fcontain diff-staff">
         <a href="https://youtu.be/O_okyGcVcPc">
            <div class="sample-staff darkgreen rounded">
               <div class="staff-pic">
                  <div>
                     <h2 class="gen-title">Ted Mosby</h2>
                  </div>
                  <img src="images/staff/ted.jpg" alt="Ted Mosby" class="gen-img rounded">
               </div>
               <h3 class="norm-text">Architect</h3>
            </div>
         </a>

         <a href="https://youtu.be/3QNrj4o00m8">
            <div class="sample-staff darkgreen rounded">
               <div class="staff-pic">
                  <div>
                     <h2 class="gen-title">Marshall Erisksen</h2>
                  </div>
                  <img src="images/staff/marsh.jpg" alt="Marshall Erisksen" class="gen-img rounded">
               </div>
               <h3 class="norm-text">Lawyer</h3>
            </div>
         </a>

         <a href="https://youtu.be/fmeMbelaZGk">
            <div class="sample-staff darkgreen rounded">
               <div class="staff-pic">
                  <div>
                     <h2 class="gen-title">Barney Stinson</h2>
                  </div>
                  <img src="images/staff/barney.jpg" alt="Barney Stinson" class="gen-img rounded">
               </div>
               <h3 class="norm-text">Awesome</h3>
            </div>
         </a>
      </div>
   </section>

    <?php include("footer.html") ?>
</body>

</html>