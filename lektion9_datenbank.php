<?php
// ---- Schritt 1: Datenbank-Verbindungsinformationen ----
$server = "localhost";
$benutzer = "root";
$passwort = ""; // XAMPP ist standardmäßig ohne Passwort.
$datenbank = "praktikum_projekt";

// ---- Schritt 2: Mit der Datenbank verbinden ----
$verbindung = mysqli_connect($server, $benutzer, $passwort, $datenbank);

// Verbindung prüfen
if (!$verbindung) {
    // Wenn die Verbindung fehlschlägt, eine Fehlermeldung ausgeben und das Programm beenden.
    die("Datenbankverbindung fehlgeschlagen: " . mysqli_connect_error());
}
echo "Datenbankverbindung erfolgreich!";
echo "<hr>";


// ---- Schritt 3: SQL-Abfrage vorbereiten und ausführen ----
$sql = "SELECT id, benutzername FROM benutzer";
$ergebnis = mysqli_query($verbindung, $sql);


// ---- Schritt 4: Ergebnisse empfangen und anzeigen (Fetch) ----
if (mysqli_num_rows($ergebnis) > 0) {
    // Wenn die Abfrage mindestens eine Zeile zurückgegeben hat...
    echo "<h2>Benutzerliste</h2>";
    echo "<ul>";
    
    // mysqli_fetch_assoc() holt die nächste Zeile aus der Ergebnismenge als "assoziatives Array".
    // Die Schleife läuft, bis keine Zeilen mehr zum Lesen vorhanden sind.
    while ($zeile = mysqli_fetch_assoc($ergebnis)) {
        echo "<li>ID: " . $zeile["id"] . " - Benutzername: " . htmlspecialchars($zeile["benutzername"]) . "</li>";
    }
    
    echo "</ul>";
} else {
    echo "Keine Ergebnisse gefunden.";
}
echo "<hr>";

/*
Kurze Zusammenfassung (Kısa Özet)
PHP verwendet die mysqli-Erweiterung, um sich mit MySQL-Datenbanken zu verbinden.

Für eine Verbindung sind 4 Informationen erforderlich: Hostname, Benutzername, Passwort und Datenbankname.

Der Prozess besteht in der Regel aus 5 Schritten: Informationen definieren, verbinden (mysqli_connect), 
abfragen (mysqli_query), Ergebnisse abrufen (mysqli_fetch_assoc in einer Schleife) 
und die Verbindung schließen (mysqli_close).

Die Ergebnisse einer SELECT-Abfrage werden typischerweise Zeile für Zeile in einer while-Schleife verarbeitet.

Die Funktion mysqli_fetch_assoc() gibt jede Zeile als assoziatives Array zurück, wobei die Schlüssel die Spaltennamen sind, 
was den Zugriff auf die Daten erleichtert.

Speichere diesen Code als lektion9_datenbank.php und führe ihn aus. 
Du solltest auf dem Bildschirm eine Liste der Benutzer sehen, die du auch in phpMyAdmin gesehen hast.

Wenn du das geschafft hast, werden wir in unserer nächsten Lektion unsere login.php-Datei so aktualisieren, 
dass sie den Benutzernamen und das Passwort gegen diese Datenbanktabelle prüft, 
anstatt gegen die fest im Code hinterlegten Werte ('jakob', '1234'). 
Dann wird unser Login-System anfangen, mit einer echten Datenbank zu arbeiten!
*/ 

// ---- Schritt 5: Verbindung schließen ----
// Es ist eine gute Praxis, die Verbindung zu schließen, wenn wir fertig sind.
 
mysqli_close($verbindung);

?>