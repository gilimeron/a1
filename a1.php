<?php require('quoteGenerator.php'); ?>

<!DOCTYPE html>

<html>

 <head>
  <title>Gili Meron</title>
  <link rel="stylesheet" href="style.css">
  <meta charset='utf-8'>
 </head>

 <body>
  <h1>Gili Meron</h1>
  <img src='/images/gili.jpg' alt='Me'>
  <h2>About Me</h2>
  <p>I am a Quality Assurance Engineer at CloudLock, a cloud security company recently acquired by Cisco. <br/> I'm taking this course as part of my master's degree in Information Systems Management in Harvard Extension School. By taking this course I hope to expand my knowledge in building web applications.
  <br/>I live in Newton MA with my husband, our adorable 5 months old baby girl, and a cat named Sushi. </p>
  <h2>Random Quote</h2>
  <p>
    <?php
     generateQuote($quotes);
    ?>
  </p>
 </body>
</html>
