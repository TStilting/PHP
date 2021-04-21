<?php
session_start();

if ($_SESSION["user"] && $_SESSION["user"]["rol"] == "admin") {
    print "Succesvol ingelogd als Admin ". $_SESSION["user"]['eemaal']."<br>";
    print "<a href='login.php'>Terug naar de Hoofdpagina</a>";
} else {
    header('location: login.php');
}
?>
