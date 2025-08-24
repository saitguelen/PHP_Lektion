<?php
/*1 PHP for-Schleife - Ausgabe
Erstellen Sie ein Skript, das 1-2-3-4-5-6-7-8-9-10 in einer Zeile anzeigt.
An der Start- und Endposi<on soll kein Bindestrich (-) stehen.*/
echo"1 PHP for-Schleife - Ausgabe";
echo "<br>";
echo"Erstellen Sie ein Skript, das 1-2-3-4-5-6-7-8-9-10 in einer Zeile anzeigt.";


echo "<br>";
echo "<br>";

for ($i = 1; $i < 11; $i++) {
    if ($i<10){
        echo $i . "-"; //Konkatenieren
    }else {
        echo $i."<br>";
    }
}
echo "<br>";
echo "<br>";
/*2 PHP for-Schleife – Summieren
Erstellen Sie ein Skript mit einer for-Schleife, um alle Ganzzahlen zwischen 0 und 30 zu
addieren und geben Sie die Summe aus.*/

echo"2 PHP for-Schleife – Summieren";
echo "<br>";
echo"Erstellen Sie ein Skript mit einer for-Schleife, um alle Ganzzahlen zwischen 0 und 30 zu addieren und geben Sie die Summe aus.";
echo "<br>";

$summe = 0; // Başlangıç değeri
for ($i = 0; $i < 31; $i++) {
    $summe =$i*($i+1)/2; //oder $summe +=$i;
    
}echo"Die Summe ist: $summe" . "<br>"; 
echo "<br>";

$farben = array('Weiß', 'Grün', 'Rot', 'Blau', 'Schwarz');

// Die gewünschte Zeichenfolge mit Wörtern aus dem Array
echo "Als panarabische Farben bezeichnet man die Farben "
    . $farben[0] ." , " .$farben[4]. " , ". $farben[1] . " und " . $farben[2]
    . ", die in den Flaggen der meisten arabischen Staaten in verschiedenen Kombinationen und Gewichtungen auftreten.";


echo "<br>";
/*4 PHP-Funk>on
Schreiben Sie eine PHP-Funktion, die prüf, ob eine übergebene Zeichenfolge ein Palindron ist oder nicht.
Ein Palindrom ist ein Wort, eine Phrase oder eine Sequenz, die rückwärts oder vorwärts gleich gelesen wird, z.B. „Anna“ oder „Rentner“.
Die Funk<on soll die Zahl 1 (true) zurückgeben, falls es ein Palindrom ist ansonsten 0
(false).
Hinweis: Nutzen Sie strrev( ). strrev – Kehrt einen String um
Beispiel:
<?php
echo strrev("Hallo Welt!"); // Ausgabe: "!tleW ollaH"
?>*/
echo "<br>";
echo"Schreiben Sie eine PHP-Funktion, die prüf, ob eine übergebene Zeichenfolge ein Palindron ist oder nicht.
Ein Palindrom ist ein Wort, eine Phrase oder eine Sequenz, die rückwärts oder vorwärts gleich gelesen wird, z.B. „Anna“ oder „Rentner“. und 'Hallo':";
echo "<br>";
echo "<br>";
function istPalindrom($wort) {
    // Groß- und Kleinschreibung entfernen
    $wort = strtolower($wort);
    
    // Nehmen Sie das Gegenteil des Wortes
    $umgekehrtesWort = strrev($wort);
    
     // Rückgabe 1, wenn das Wort und sein Inverses gleich sind, sonst 0
    if ($wort === $umgekehrtesWort) {
        return 1; // Palindrom
    } else {
        return 0; // Nicht Palindrom
    }
}

// Test
echo istPalindrom("Anna"); // 1 (Palindrom)
echo "<br>";
echo istPalindrom("Rentner"); // 1 (Palindrom)
echo "<br>";
echo istPalindrom("Hallo"); // 0 (Nicht Palindrom)

?>
