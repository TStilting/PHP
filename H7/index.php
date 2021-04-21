<?php
session_start();

if ($_SESSION["user"]) {
 print "Succesvol ingelogd als ". $_SESSION["user"]['eemaal']."<br>";
 print "<a href='login.php'>Terug naar de Hoofdpagina</a>";
} else {
    header('location: login.php');
}
?>
