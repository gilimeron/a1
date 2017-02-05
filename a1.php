<?php require('quoteGenerator.php'); ?>

<!DOCTYPE html>

<html>
 <head>
  <title>Assignment 1</title>
  <link rel="stylesheet" href="style.css">
  <meta charset='utf-8'>
 </head>

 <body>
  <h1>Gili Meron</h1>
  <img src='/images/Abigail.jpg' alt='Adorable baby'>
  <h2>About Me</h2>
  <p>I am a Quality Assurance Engineer in a cloud security startup. I live in Newton MA and studying towards a degree in Information System Management. I have a husband, an adorable 5 months old baby, and a cat. </p>
  <h2>Random Quote</h2>
  <p>
    <?php
     generateQuote($quotes);
    ?>
  </p>
 </body>
</html>
