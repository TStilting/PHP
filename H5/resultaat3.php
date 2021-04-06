<?php

$gegevens = array("piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201");


foreach($gegevens as $emaal => $wachtwurd) {
    if ($_POST['emaal'] != $_POST['wachtwurd']) {
        print "Geen Toegang <br>";
        print "<a href='form3.html'>Opnieuw Invullen</a><br>";
    } else {
        print "toegang verleend";
    }
}
?>