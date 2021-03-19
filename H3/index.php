<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
 <body>
 <?php
  for($foto = 1; $foto < 9; $foto++) {
   echo "<img src='../Fotos/Turtle/Turtle".$foto.".jpg'>";
  }
  $bomen = array("img_0050.jpg", "lillypilly1.jpg","Maranchery_Biyyam_Kayal_kandal.jpg");

  foreach($bomen as $boom) {
      echo "<img src='../Fotos/Boom/".$boom."'>";
  }

  ?>
 <a href="index2.php">3.2</a>
 <a href="index3.php">3.3</a>
 <a href="index4.php">3.4</a>
 <a href="index5.php">3.5</a>
 <a href="index6.php">3.6</a>
 <a href="index7.php">3.7</a>
 </body>
</html>




