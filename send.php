<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime_prezime = $_POST['ime_prezime'];
    $telefon = $_POST['telefon'];
    $kompanija = $_POST['kompanija'];
    $oblast = $_POST['oblast'];
    $pilot_projekat = $_POST['pilot_projekat'];

    $to = "office@simbatech.rs";
    $subject = "Prijava za pilot projekat";
    $message = "Nova prijava:\n\n" .
               "Ime i prezime: $ime_prezime\n" .
               "Broj telefona: $telefon\n" .
               "Kompanija: $kompanija\n" .
               "Oblast: $oblast\n" .
               "Ime pilot projekta: $pilot_projekat\n";

    $headers = "From: prijava@sajt.rs";

    if (mail($to, $subject, $message, $headers)) {
        echo "Prijava je uspešno poslata.";
    } else {
        echo "Došlo je do greške pri slanju prijave.";
    }
}
?>
