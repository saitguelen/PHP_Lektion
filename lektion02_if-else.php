<?php
// ------------ IF-ELSE-BEDINGUNGEN -----------------

echo "<h1>Beispiel für Bedingungen( if-else)</h1>";

$note= 15; // Eine VAriable, die die Note des Schülers dargestellt

echo "<p>Die Note des Schülers ist: " . $note . "</p>";

//Wir prüfen die Bedingung, ob die Note größer oder gleich 50 ist

if ($note >= 50) {
    // Wenn die Note größer oder gleich 50 ist, wird dieser Block ausgeführt
    echo "<p>Herzlichen Glückwunsch! Sie haben  bestanden.</p>";
} else {
    // Wenn die Note kleiner als 50 ist, wird dieser Block ausgeführt
    echo "<p>Leider sind Sie durchgefallen.</p>";
}

//Verwendung von elseif für mehrere Bedingungen

if ($note ==100) {
    echo "<p>Großartig! Sie haben die Bestnote erreicht.</p>";
}elseif ($note >= 90) {
    echo "<p>Ihre Leistung ist ausgezeichnet!</p>";
} elseif ($note >= 75) {
    echo "<p>Sehr gut! Sie haben eine hohe Note erreicht.</p>";
} elseif ($note >= 60) {
    echo "<p>Gut! Sie haben eine gute Note erreicht.</p>";
} elseif ($note >= 50) {
    echo "<p>Befriedigend! Sie haben eine befriedigende Note erreicht.</p>";
} else {
    echo "<p>Verbesserungsbedarf! Sie haben nicht bestanden.</p>";
}