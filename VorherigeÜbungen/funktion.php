<?php 
//Prinzipiell kann man 4 Typen von Funktionen unterscheiden. 
// def blabal() 
//1. Fall: Funktion ohne Parameterliste und ohne Riickgabewert 
function sagHallo(){ 
echo "Hallo <br>";
} 
//Funktionsaufruf 
sagHallo(); 

//2. Fall: Funktion mit Parameterliste aber ohne Riickgabewert 
function addiere($zahl1, $zahl2) { 

    $summe = $zahl1 + $zahl2; 

    echo $summe."<br>"; 
}
addiere(2,3); 
//In PHP spielt bei Funktionsnamen Gro&- und Kleinschreibung 
//keine Rolle! Solange es sich um ASCII-Zeichen (A-Z) handelt. 
//3. Fall: Funktion ohne Parameterliste aber MIT Riickgabewert. 
// Rickgabewert = Ergebnis 
function gibPIzurueck() { 

return 3.14159; 
}

$kreiszahl = gibPIzurueck();//Funktionsaufruf ohne Argumente
$radius=2;
$umfang=2*$kreiszahl*$radius;//Umfang eines Kreises U=2*PI*r
echo $umfang."<br>";
//4. Fall: Funktion mit Parameterliste und Rückgabewert
function checkAlter($alter) {
    if($alter>= 18)
        return true;//oder return 1;
        return false;//oder return 0 ;

}
$jahr = 23;
$age = checkAlter($jahr);
if($age)
    echo"Sie sind volljährig"."<br>";
else
    echo"Sie sind nicht volljährig"."<br>";