<?php
//---------------- 1. FUNKTIONEN DEFINIEREN ----------
//Diese Funktionen nimmt einen Namen entgegen, erstellt eine persönliche Begrüßung und gibt sie aus.
function erstelleBegruessung($name) {
    $nachricht = "Willkommen, " .$name. "!";
    return $nachricht; //Gib die Nachricht zurück
}

echo "<br>";

// ------------- 2. ARRAY ERSTELLEN UND VERWENDEN ----------
//Speichern wir die Nammen der Praktikanten in einem Array
$praktikanten = array("Max", "Anna", "Sait", "Lisa");

//3. SCHLEIFE, FUNKTIONAUFRUF UND AUSGABE UND STRING OPERATOREN

echo "<h1>Praktikantenliste</h1>";
echo "<ul>";
//Die foreach-Schleife ist sehr praktisch, um alle Elemente eines Arrays nacheinander zu durchlaufen
foreach ($praktikanten as $praktikant) {
    //Hier rufen wir die Funktion auf, um eine Begrüßung für jeden Praktikanten zu erstellen
    $begrussung = erstelleBegruessung($praktikant);
//Finden wir die Länge des Namens des Praktikanten(String-Funktionen)
    $namenslaenge = strlen($praktikant);
    //Hier geben wir die Begrüßung und die Länge des Namens aus
    echo "<li>" . $begrussung . " Der Name hat " . $namenslaenge . " Zeichen.</li>";
}
echo "</ul>";
?>
<?php



// ------------ FUNKTIONEN -----------------

echo "<h1>Beispiel für Funktionen</h1>";
// Eine Funktion, die einen Begrüßungstext ausgibt
function begruessung($name) {
    echo "<p>Hallo, " .$name. "! Willkommen zu unserer PHP-Lektion.</p>";
}

// Aufruf der Funktion
begruessung("Max");
begruessung("Sait");
// Eine Funktion, die zwei Zahlen addiert und das Ergebnis zurückgibt
function addiere($a, $b) {
    return $a + $b;
}
function multipliziere($a, $b) {
    return $a * $b;
}
// Aufruf der Funktion und Ausgabe des Ergebnisses
$ergebnis = addiere(5, 10);
$ergebnis_mult = multipliziere(5, 10);

echo "<p>Das Ergebnis der Addition ist: " .$ergebnis. "</p>";
echo "<p>Das Ergebnis der Multiplikation ist: " .$ergebnis_mult. "</p>";
echo "<br>";
echo "<h2>Zusammenfassung</h2>";
echo "<p>Funktionen sind wiederverwendbare Codeblöcke, die eine bestimmte Aufgabe erfüllen.</p>";
echo "<p>Sie können Parameter entgegennehmen und Werte zurückgeben.</p>";
echo "<p>Funktionen helfen, den Code zu organisieren und die Wiederverwendbarkeit zu erhöhen.</p>";

?>
<?php
// ------------ ARRAYS -----------------    
echo "<h1>Beispiel für Arrays</h1>";
// Ein Array, das die Namen von Schülern enthält        
$schueler = array("Max", "Anna", "Peter", "Lisa");
// Ausgabe der Schülernamen

echo "<p>Die Schülernamen sind:</p>";
foreach ($schueler as $name) {
    echo "<p>Schüler: " .$name. "</p>";
}   
// Ein assoziatives Array, das die Noten der Schüler enthält
$noten = array(
    "Max" => 85,
    "Anna" => 90,
    "Peter" => 78,
    "Lisa" => 88
);

// Ausgabe der Noten
echo "<p>Die Noten der Schüler sind:</p>";
foreach ($noten as $name => $note) {
    echo "<p>Schüler: " .$name. ", Note: " .$note. "</p>";
}
// Ein mehrdimensionales Array, das die Schülerdaten enthält
$schueler_daten = array(
    array("Name" => "Max", "Alter" => 16, "Note" => 85),    
    array("Name" => "Anna", "Alter" => 17, "Note" => 90),
    array("Name" => "Peter", "Alter" => 16, "Note" => 78),
    array("Name" => "Lisa", "Alter" => 17, "Note" => 88)
);      
// Ausgabe der Schülerdaten
echo "<p>Die Schülerdaten sind:</p>";   
foreach ($schueler_daten as $schueler) {
    echo "<p>Name: " .$schueler['Name']. ", Alter: " .$schueler['Alter']. ", Note: " .$schueler['Note']. "</p>";
}   
// Ein Array mit gemischten Datentypen
$gemischtes_array = array("Max", 16, true, 85.5, array("Fußball", "Lesen"));    
// Ausgabe des gemischten Arrays
echo "<p>Das gemischte Array enthält:</p>";
foreach ($gemischtes_array as $element) {
    if (is_array($element)) {
        echo "<p>Array: " . implode(", ", $element) . "</p>";
    } else {
        echo "<p>Element: " . $element . "</p>";
    }   

}
// Zusammenfassung der Array-Funktionen
echo "<h2>Zusammenfassung</h2>";
echo "<p>Arrays sind Datenstrukturen, die mehrere Werte speichern können.</p>";
echo "<p>Es gibt indizierte Arrays, assoziative Arrays und mehrdimensionale Arrays.</p>";
echo "<p>Arrays ermöglichen die Organisation und Verarbeitung von Daten in PHP.</p>";
echo "<p>Sie können mit Funktionen wie <code>array_push()</code>, <code>array_pop()</code>, <code>count()</code> und anderen bearbeitet werden.</p>";

// Beispiel für eine Funktion, die ein Array sortiert


function sortiereArray($array) {
    sort($array);
    return $array;
}
// Aufruf der Funktion und Ausgabe des sortierten Arrays
$unsortiertes_array = array(5, 2, 8, 1, 4);
$sortiertes_array = sortiereArray($unsortiertes_array);
echo "<p>Das sortierte Array ist: " . implode(", ", $sortiertes_array) . "</p>";    
// Beispiel für eine Funktion, die ein Array nach einem bestimmten Kriterium filtert
function filtereArray($array, $kriterium) {     

    $gefiltertes_array = array();
    foreach ($array as $element) {
        if ($element > $kriterium) {
            $gefiltertes_array[] = $element;
        }
    }
    return $gefiltertes_array;
}
