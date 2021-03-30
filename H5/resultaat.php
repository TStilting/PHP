<?php


print $_POST['inlognaam'];
print $_POST['email'];
print $_POST['adres'];

if ($_POST['inlognaam'] == "") {
    print "Ongeldige naam <br>";
    print "<a href='form.html'>Opnieuw Invullen</a><br>";
}

if ($_POST['email'] == "") {
    print "Ongeldige email <br>";
    print "<a href='form.html'>Opnieuw Invullen</a><br>";
}

if ($_POST['adres'] == "") {
    print "Ongeldig adres <br>";
    print "<a href='form.html'>Opnieuw Invullen</a><br>";
}

if ($_POST['wachtwoord'] == "") {
    print "Ongeldig wachtwoord <br>";
    print "<a href='form.html'>Opnieuw Invullen</a><br>";
}
?>
