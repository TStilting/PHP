<?php
session_start();

if ($_SESSION["user"] && $_SESSION["user"]["rol"] == "admin") {
    print "Succesvol ingelogd als Admin ". $_SESSION["user"]['eemaal'];
    print "<a href='login.php'>Hoofdpagina</a>";
} else {
    header('location: login.php');
}
?>
