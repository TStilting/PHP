<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrayyyyyy</title>
    <style>
    </style>
</head>
<body>
<?php
$clubs = array( "De spartelkuikens", "De waterbuffels", "Plonsmderin", "Bommetje");
$clubs[0] = 25;
$clubs[1] = 32;
$clubs[2] = 11;
$clubs[3] = 23;

print("<ul>");
foreach($clubs as $aantal) {

    print "<img src='../Fotos/Overig/Zwemmer.jpg'>";

    print("<br>");
}
print("</ul>");



?>
<a href="index.php">3.1</a>
<a href="index2.php">3.2</a>
<a href="index3.php">3.3</a>
<a href="index4.php">3.4</a>
<a href="index5.php">3.5</a>
<a href="index7.php">3.7</a>
</body>
</html>