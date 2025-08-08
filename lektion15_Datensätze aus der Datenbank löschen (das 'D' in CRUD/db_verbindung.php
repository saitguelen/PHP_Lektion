<?php
$server = "localhost";
$benutzer = "root";
$passwort = "";
$datenbank = "praktikum_projekt";

$verbindung = mysqli_connect($server,$benutzer, $passwort, $datenbank);

if(!$verbindung) {
    die("Datenbankverbindung fehlgeschlagen: " . mysqli_connect_error());
}
?>