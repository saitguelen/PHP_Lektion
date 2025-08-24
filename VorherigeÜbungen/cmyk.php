<?php
    echo "<p>Geben Sie bitte eine Farbe ein:</p>";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Helvetica, sans-serif;
            font-size: 18px;
        }
        input { font: inherit; }
        div { margin-top: 1.5em; }
    </style>
</head>
<body>

<form action="cmyk.php" method="get">
    <div>
        <p><label for="rot">Rot:</label></p>
        <input type="number" name="r" id="rt" size="25" min="0" max="255" required>
    </div>
    <div>
        <p><label for="gruen">Grün:</label></p>
        <input type="number" name="g" id="gr" size="25" min="0" max="255" required>
    </div>
    <div>
        <p><label for="blau">Blau:</label></p>
        <input type="number" name="b" id="bl" size="25" min="0" max="255" required>
    </div>
    <div>
        <input type="submit" value="Rechnen">
        <input type="reset" value="Zurücksetzen">
    </div>
</form>  

<?php
// Prüfe, ob das Formular gesendet wurde
if (isset($_GET['r']) && isset($_GET['g']) && isset($_GET['b'])) {
    $r = intval($_GET['r']);
    $g = intval($_GET['g']);
    $b = intval($_GET['b']);

    // Werte normalisieren (0-1)
    $r /= 255;
    $g /= 255;
    $b /= 255;

    // Höchsten Wert bestimmen
    $w = max($r, $g, $b);

    // Falls alles Schwarz ist
    if ($w == 0) {
        $c = 0;
        $m = 0;
        $y = 0;
        $k = 1;
    } else {
        // CMYK berechnen
        $c = ($w - $r) / $w;
        $m = ($w - $g) / $w;
        $y = ($w - $b) / $w;
        $k = 1 - $w;
    }

    // Ergebnis anzeigen
    echo "<h3>Ergebnis:</h3>";
    echo "<p>RGB ($r, $g, $b) entspricht:</p>";
    echo "<p>C: " . round($c, 8) . "</p>";
    echo "<p>M: " . round($m, 8) . "</p>";
    echo "<p>Y: " . round($y, 8) . "</p>";
    echo "<p>K: " . round($k, 8) . "</p>";
}
?>
</body>
</html>
