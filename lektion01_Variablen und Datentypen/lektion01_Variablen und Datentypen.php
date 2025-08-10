<?php
// ------------ Variablen und Datentypen ----------------

//String-Datentypen
$vorname = "Max";
$nachname = "Mustermann";
$adresse = "Musterstraße 1";
$plz = "12345";
$ort = "Musterstadt";

//Integer-Datentypen
$alter = 30;
$plz_nummer = 12345;
$geburtsjahr = 1993;

//Float-Datentypen
$gewicht = 70.5;
$groesse = 1.80;

//Boolean-Datentypen
$ist_student = true;
$ist_arbeitnehmer = false;
$istLernwillig = true;

//Array-Datentypen
$hobbys = array("Fußball", "Lesen", "Reisen");
$noten = array(1, 2, 3, 4, 5);

// ------ OPERATOREN UND VERGLEICHE -----------------
//Arithmetische Operatoren
$summe = $alter + 5; // Addition
$produkt = $alter * 2; // Multiplikation
$quotient = $gewicht / 2; // Division   

//Alter mit aritmetischen Opetaoren berechnen
$aktuelles_jahr = 2025; // Beispiel aktuelles Jahr--Vorerst geben wir das Jahr manuell ein

$alter_berechnet = $aktuelles_jahr - $geburtsjahr;

//Vergleichsoperatoren
$ist_gleich = ($alter == 30);   // Gleichheit
$ist_nicht_gleich = ($alter != 25);   // Ungleichheit       
$ist_groesser = ($alter > 20);   // Größer als
$ist_kleiner = ($alter < 40);   // Kleiner als
$ist_groesser_oder_gleich = ($alter >= 30);   // Größer oder gleich
$ist_kleiner_oder_gleich = ($alter <= 30);   // Kleiner oder gleich 

//Einen Satz mit dem Verkettungsoperator erstellen
$vorstellungsnachricht = "Hallo, mein Name ist " . $vorname . " " . $nachname . " und ich bin " .$alter_berechnet . " Jahre alt.";

//---------- AUSGABE AUF DEM BILDSCHIRM(echo)--------

//Der Befehl "echo" wird verwendet, um Text oder Variablen auf dem Bildschirm auszugeben
// Wir können auch HTML-Tags verwenden, um die Ausgabe zu formatieren

echo "<h1>Willkommen zu Lektion 01</h1>";
echo "<h1>Persönliche Informationen</h1>";
echo "<p>Name: " . $vorname . " " . $nachname . "</p>";
echo "<p>Adresse: " . $adresse . "</p>";
echo "<p>PLZ: " . $plz . "</p>";        

echo "<p>Ort: " . $ort . "</p>";
echo "<p>Alter: " . $alter_berechnet . " Jahre</p>";
echo "<p>Gewicht: " . $gewicht . " kg</p>";
echo "<p>Größe: " . $groesse . " m</p>";    

echo "<p>" . $vorstellungsnachricht . "</p>";

echo "<h2>Hobbys</h2>";
foreach ($hobbys as $hobby) {
    echo "<p>Hobby: " . $hobby . "</p>";
}       
// Ein boolescher Wert wird als 1 (für true) oder leer (für false) angezeigt.
echo "<p>Ist lernwillig?--> " . ($istLernwillig? "Ja" : "Nein"). "</p>";
echo "<p>Ist Student?--> " . ($ist_student ? "Ja" : "Nein") . "</p>";
echo "<p>Ist Arbeitnehmer?--> " . ($ist_arbeitnehmer ? "Ja" : "Nein") . "</p>";

