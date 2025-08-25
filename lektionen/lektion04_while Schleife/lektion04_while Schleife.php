<?php
 
// ------------ WHILE-SCHLEIFE -----------------

echo "<h1>Beispiel für eine while-Schleife</h1>";   
// Eine while-Schleife, die von 1 bis 10 zählt
echo "<p>Die Zahlen von 1 bis 10 sind:</p>";    
$i = 1; // Startwert
while ($i <= 10) {
    //// Bedingung: Führe aus, solange $i kleiner oder gleich 10 ist
    echo "Zahl: " .$i. "<br>";
    $i++; // inkrementierung
    // Wir müssen den Zähler innerhalb der Schleife erhöhen, sonst entsteht eine Endlosschleife!
}
echo "<br>";
echo "<p>Die while-Schleife wird verwendet, wenn wir eine Bedingung haben, die überprüft werden muss, bevor der Code ausgeführt wird.</p>";
echo "<p>Sie ist nützlich, wenn die Anzahl der Wiederholungen nicht im Voraus bekannt ist.</p>";        
echo "<p>Die Struktur einer while-Schleife ist wie folgt:</p>";

echo "<p>Ein Startwert wird festgelegt (z. B. ein Zähler '$'i = 1').</p>";
echo "<p>Eine Bedingung für die Fortsetzung der Schleife wird angegeben (z. B. '$'i <= 10').</p>";
echo "<p>Der Zähler wird innerhalb der Schleife erhöht (z. B. '$i++', um den Zähler um eins zu erhöhen).</p>";  
echo "<p>Die Schleife wird so lange ausgeführt, wie die Bedingung wahr ist.</p>";

echo "<p>Die while-Schleife ist besonders nützlich, wenn die Anzahl der Wiederholungen nicht im Voraus bekannt ist.</p>";
echo "<p>Sie wird oft verwendet, um auf Ereignisse zu warten oder Daten zu verarbeiten, bis eine bestimmte Bedingung erfüllt ist.</p>"; 
// Wir können auch eine while-Schleife verwenden, um Benutzereingaben zu verarbeiten oder Daten aus einer Datenbank zu lesen, bis keine weiteren Datensätze mehr vorhanden sind.

echo "<h2>Zusammenfassung</h2>";    
echo "<p>Die while-Schleife ist eine Kontrollstruktur, die es ermöglicht, einen Codeblock so lange auszuführen, wie eine bestimmte Bedingung wahr ist.</p>";
echo "<p>Sie wird häufig verwendet, wenn die Anzahl der Wiederholungen nicht im Voraus bekannt ist.</p>";
echo "<p>Die Struktur einer while-Schleife besteht aus einem Startwert, einer Bedingung und einer Inkrementierung des Zählers innerhalb der Schleife.</p>";
echo "<p>Die while-Schleife ist besonders nützlich für Ereignisverarbeitung und Datenverarbeitung.</p>";
