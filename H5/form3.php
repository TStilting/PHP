<?php

session_start();
if (isset($_POST['Submit'])) {
    $gegevens = array("piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truushendriks@wegweg . nl" => "arkiearkie201");
$email = isset($_POST['emaal']) ? $_POST['emaal'] : '';
$wachtwoord = isset($_POST['wachtwurd']) ? $_POST['wachtwurd'] : '';

if (isset($logins[$email]) && $gegevens[$email] == $wachtwoord) {
$_SESSION['UserData']['emaal']=$gegevens[$email];
header("location:form3.php");
exit;
} else {
print "Geen Toegang";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fooorm</title>
</head>
<body>
<form action="resultaat3.php" method="post">
    Email <input type="email" name="emaal" value=""><br>
    Wachtwoord <input type="password" name="wachtwurd" value=""><br>
    <input type="submit" name="knop" value="verstuur">
</form>
</body>
</html>
