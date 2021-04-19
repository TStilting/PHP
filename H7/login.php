<?php

    session_start();
    if (isset($_POST['Submit'])) {
        $gegevens = array(
                "piet@worldonline.nl" => array("wachtwoord" => "doetje123", "rol" => "gebruiker"),
                "klaas@carpets.nl" => array("wachtwoord" => "snoepje777", "rol" => "gebruiker"),
                "truushendriks@wegweg . nl" => array("wachtwoord" => "arkiearkie201", "rol" => "gebruiker")
        );
        $email = isset($_POST['eemaal']) ? $_POST['eemaal'] : '';
        $wachtwoord = isset([$_POST['eemaal']]['wachtwoord']) ? $_POST['wachtwoord'] : '';

        if (isset($gegevens[$email]) && $gegevens[$email] == $wachtwoord) {
            $_SESSION['user'] = array("gegevens" => $_POST['eemaal'], $gegevens[$_POST['eemaal']]['wachtwoord'], $gegevens[$_POST['eemaal']]['rol']);
            $zin = "<p>Ingelogd als: ".$_SESSION['user'] ['eemaal']."<br>Rol:".$_SESSION['user'] ['rol']."</p>";
        } else {
            $zin = "<p>Geen Toegang</p>";
        }
    }

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fooooorm</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <?php if(isset($zin)){?>
            <tr>
                <td colspan="2" align="center" valign="top"><?php print $zin;?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
        </tr>
        <tr>
            <td align="right" valign="top">Email</td>
            <td><input name="eemaal" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right">Wachtwoord</td>
            <td><input name="wachtwoord" type="password" class="Input"></td>
        </tr>
        <tr>
            <td> </td>
            <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
        </tr>
    </table>
</form>
<a href="index.php">Hoofdpagina</a>
<a href="login.php?loguit">Uitloggen</a>
</body>
</html>
