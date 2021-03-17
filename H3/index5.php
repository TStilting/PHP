<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrayyyyy</title>
    <style>
    </style>
</head>
<body>
<?php

$leeftijd = 1;
$bedrag = 10;

if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 3) {
    $bedrag = 0;
}

echo "De prijs: ".$bedrag." euro. ";

?>
<a href="index.php">3.1</a>
<a href="index2.php">3.2</a>
<a href="index3.php">3.3</a>
<a href="index4.php">3.4</a>
<a href="index6.php">3.6</a>
</body>
</html>