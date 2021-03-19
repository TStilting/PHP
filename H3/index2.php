<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrayy</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
 <body>
 <?php
for($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "*<br>";
}

 ?>
 <a href="index.php">3.1</a>
 <a href="index3.php">3.3</a>
 <a href="index4.php">3.4</a>
 <a href="index5.php">3.5</a>
 <a href="index6.php">3.6</a>
 <a href="index7.php">3.7</a>
 </body>
</html>