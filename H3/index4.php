<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrayyyy</title>
    <style>
        body {
            text-align: center;
        }
        .rood {
              border: red solid 5px;
        }
        .groen {
            border: green solid 5px;
        }
    </style>
</head>
<body>
<?php
for($foto = 1; $foto < 9; $foto++) {
    if ($foto % 2 == 0) {
        $class = "class = 'rood'";
    }
    else {
        $class = "class = 'groen'";
    }
    echo "<img ".$class. "src='../Fotos/Turtle/Turtle".$foto.".jpg'>";
}

?>
<a href="index.php">3.1</a>
<a href="index2.php">3.2</a>
<a href="index3.php">3.3</a>
<a href="index5.php">3.5</a>
<a href="index6.php">3.6</a>
<a href="index7.php">3.7</a>
</body>
</html>