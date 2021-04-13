<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foooorm</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=schoool", $username, $password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT * FROM cursist");
$stmt->execute();
$row = $stmt->fetch();
while ($row = $stmt->fetch()) {
    print "<tr>";
    print "<td>".$row['cursistnr']."</td>";
    print "<td>".$row['naam']."</td>";
    print "<td>".$row['roepnaam']."</td>";
    print "<td>".$row['straat']."</td>";
    print "<td>".$row['postcode']."</td>";
    print "<td>".$row['plaats']."</td>";
    print "<td>".$row['geslacht']."</td>";
    print "<td>".$row['geb_datum']."</td>";
    print "</tr>";

}
?>
</table>
<a href="foooorm.php">6.2</a>
</body>
</html>
