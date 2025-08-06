<?php

//Diese Datei dient nur zum Erstellen eines Passwort_Hashes, wir können sie später löschen

$passwort='qwert123'; // Das Passwort, das du hashen möchtest

$gehashtes_passwort= password_hash($passwort, PASSWORD_DEFAULT);
echo "Original-Passwort: " . $passwort . "<br>";
echo "Gehashtete Version: ". $gehashtes_passwort . "<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Hashing</title>
</head>
<body>
    <h1>Wir hashen passwort</h1>

    <h2>Lektion 11: Passwörter sicher speichern (Password Hashing)</h2>

    <p>1. Grundlagen <br>
    
<p>
a) Warum sollten wir Passwörter nicht im Klartext speichern?
Ein Passwort als "1234" in der Datenbank zu speichern, ist wie den Hausschlüssel unter die Fußmatte zu legen. <br>
Jeder, der irgendwie Zugriff auf die Datenbank erlangt, hat sofort die Passwörter aller Benutzer.<br>
</p>
<p>
b) Was ist Hashing (Şifreleme/Karma)?<br>
Hashing ist ein einseitiger Prozess, der Daten (z.B. ein Passwort) unumkehrbar in eine komplexe Zeichenkette umwandelt.<br>

"1234"  --> password_hash() --> ein sehr langer und komplexer Text wie "$2y$10$...".<br>

Dieser Prozess ist einseitig. Das bedeutet, es ist unmöglich, <br>
aus dem komplexen Text wieder das ursprüngliche Passwort "1234" zu erhalten.
</p>
<p>
c) Wie funktioniert dann der Login?<br>
Wenn ein Benutzer versucht, sich einzuloggen, nehmen wir das von ihm eingegebene Passwort, <br>
hashen es mit demselben Algorithmus und vergleichen das Ergebnis mit dem Hash in der Datenbank. <br>
Wenn die beiden Hashes übereinstimmen, ist das Passwort korrekt.
</p>
<p>
d) Warum verwenden wir nicht md5() oder sha1()?<br>
Diese alten Hash-Algorithmen sind unsicher. Sie arbeiten sehr schnell, <br>
und moderne Computer können durch Abermilliarden von Versuchen pro Sekunde ("Brute-Force"-Angriff) den ursprünglichen <br>
Wert dieser Hashes herausfinden.
</p>
<p>
e) Die moderne und sichere Methode: <code>password_hash() </code> und <code>password_verify()</code><br>
Seit PHP 5.5 gibt es zwei sehr einfach zu bedienende und sehr sichere Funktionen, <br>
die speziell für diesen Zweck entwickelt wurden:
</p>
password_hash($passwort, ALGORITHMUS): Nimmt ein Passwort und hasht es mit dem aktuell sichersten Standardalgorithmus. <br>
Diese Funktion fügt automatisch eine zufällige Komponente namens "Salt" (Salz) hinzu. <br>
Dies stellt sicher, dass selbst zwei Benutzer mit demselben Passwort unterschiedliche Hashes in der Datenbank haben, <br>
was die Sicherheit um ein Vielfaches erhöht.<br>

password_verify($eingegebenes_passwort, $hash_aus_datenbank): Überprüft, ob ein vom Benutzer eingegebenes <br>
Klartext-Passwort mit einem in der Datenbank gespeicherten Hash übereinstimmt. Gibt true oder false zurück.</p>
<img src="passwort_liste.png" alt="Passwort Liste">