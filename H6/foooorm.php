<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=schoool", $username, $password);
} catch(PDOException) {
    echo "Connection failed";
}

$zin = inloggen();

function inloggen() {
    session_start();
    if (isset($_POST['Submit'])) {
        $email = isset($_POST['emaaal']);
        $wachtwoord = isset($_POST['wachtwuurd']);
        global $conn;
        if ($email != "" && $wachtwoord != ""){
            $stmt = $conn->prepare("select count(*) from logins where email='".$email."' and wachtwoord='".$wachtwoord."'");
            $stmt->execute();
            $resultaat = $stmt->fetch();
                if ($resultaat == 1) {
                    $_SESSION['UserData']['emaaal'] = $resultaat[$email];
                    return "<p>Toegang Verleend</p>";
                } else {
                    return "<p>Geen Toegang</p>";
                }
        } else {
            return "<p>Vul alles in</p>";
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foooorm</title>
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
            <td><input name="emaaal" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right">Wachtwoord</td>
            <td><input name="wachtwuurd" type="password" class="Input"></td>
        </tr>
        <tr>
            <td> </td>
            <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
        </tr>
    </table>
</form>
</body>
</html>