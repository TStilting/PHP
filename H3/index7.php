<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrayyyyyyy</title>
    <style>
    </style>
</head>
<body>
<?php

$kappersagenda = array(9.15, 9.30, 9.45, 10.00, 10.15, 10.30);

 print("De volgende momenten zijn nog beschikbaar:<ul>");

 foreach($kappersagenda as $afspraak => $tijd) {
  if($afspraak == "") {
    print("<li>".$tijd."</li>");
  }
 }
 print("</ul>");

?>
<a href="index.php">3.1</a>
<a href="index2.php">3.2</a>
<a href="index3.php">3.3</a>
<a href="index4.php">3.4</a>
<a href="index5.php">3.5</a>
<a href="index6.php">3.6</a>
</body>
</html>