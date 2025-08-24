<?php
//Zugriff auf globales Array
$anrede = $_POST["anrede"];
$nname = $_POST["nname"];
$vname = $_POST["vname"];
$str = $_POST["str"];
$plz = $_POST["plz"];
$ort = $_POST["ort"];
$mail = $_POST["mail"];
$telefon = $_POST["telefon"];
$zahlung = $_POST["zahlung"];
$notizen = $_POST["notizen"];
//Auswertung der Radiobuttons
if($anrede == "Herr")
$an = "Sehr geehrter Herr ";
else
$an = "Sehr geehrte Frau ";
//Auswertung der Textfelder
echo "$an $nname, <br>wir bedanken
uns für Ihre Bestellung. <br><br>
Die Lieferanschrift lautet: <br>
$vname $nname<br>
$str<br>
$plz $ort <br><br>
Ihre E-Mail-Adresse lautet: <br>
$mail <br><br>
Gewünschte Zahlungsart: <br>
$zahlung <br><br>
Ihre Bemerkung: <br>
$notizen<br><br>";
//Auswertung der Checkboxen
if(isset($_POST["newsletter"]) || isset($_POST["katalog"])){
echo "Sie erhalten zusätzlich: <br>";
if(isset($_POST["newsletter"]))
echo" - Newsletter <br>";
if(isset($_POST["katalog"]))
echo" - Katalog <br>";
}
?>