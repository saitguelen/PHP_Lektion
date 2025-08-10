<?php
// ------------ FOR-LOOP -----------------

echo "<h1>Beispiel für eine for-Schleife</h1>";

// Eine for-Schleife, die von 1 bis 10 zählt
echo "<p>Die Zahlen von 1 bis 10 sind:</p>";
for ($i = 1; $i <=10; $i++) {
    //$i=1 Startwert
    //$i<=10 Bedingung, die überprüft wird, ob die Schleife fortgesetzt werden soll
    //$i++ Inkrementierung, die den Wert von $i um 1 erhöht
    echo "Zahl: " .$i. "<br>";
    echo "<br>";
}

echo "<p> Wir verwenden Schleifen, wenn wir eine Anweisung immer wieder wiederholen möchten.</p>";
echo "<br>";
echo "<p>Zum Beispiel, um von 1 bis 10 zu zählen oder alle Datensätze aus einer Datenbank auf dem Bildschirm auszugeben. Wir werden zwei grundlegende Schleifentypen behandeln:</p>";

echo "<p><b>for-Schleife:</b> Ideal, wenn wir eine Aktion eine bestimmte Anzahl von Malen wiederholen wollen. Ihre Struktur ist wie folgt:</p>";

echo "<p>Ein Startwert wird festgelegt (z. B. ein Zähler '$'i = 1).</p>";

echo "<p>Eine Bedingung für die Fortsetzung der Schleife wird angegeben (z. B. '$'i <= 10).</p>";

echo "<p>Es wird festgelegt, wie sich der Zähler nach jedem Durchlauf ändern soll (z. B. '$'i++, um den Zähler um eins zu erhöhen).</p>";

