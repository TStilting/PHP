<?php
session_start();

if ($_SESSION["user"]) {
 print "Succesvol ingelogd als ". $_SESSION["user"]['eemaal'];
 print "<a href='login.php'>Hoofdpagina</a>";
} else {
    header('location: login.php');
}
?>
