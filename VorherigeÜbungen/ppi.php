<?php
    echo "<p>Geben Sie bitte drei Werte ein:</p>";
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

<form action="ppi.php" method="get">
    <div>
        <p><label for="x">Pixel in der Breite:</label></p>
        <input type="number" name="x" id="br" size="25" min="1" step="0.01" required>
    </div>
    <div>
        <p><label for="y">Pixel in der Höhe:</label></p>
        <input type="number" name="y" id="hh" size="25" min="1" step="0.01" required>
    </div>
    <div>
        <p><label for="d">Zoll:</label></p>
        <input type="number" name="d" id="zll" size="25" min="1" step="0.01" required>
    </div>
    <div>
        <input type="submit" value="Rechnen">
        <input type="reset" value="Zurücksetzen">
    </div>
</form>  

<?php
// Prüfe, ob das Formular gesendet wurde
if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['d'])) {
    $x = intval($_GET['x']); 
    $y = intval($_GET['y']);
    $d = floatval($_GET['d']); //  Zoll

    //  Null vermeiden
    if ($d == 0) {
        echo "<p style='color: red;'>Fehler: Die Zollgröße darf nicht 0 sein!</p>";
    } else {
        // PPI berechnen
        $PPI = sqrt(($x ** 2) + ($y ** 2)) / $d;

        // Ergebnis ausgeben
        echo "<h3>Ergebnis:</h3>";
        echo "<p>Breite, Höhe, Zoll ($x, $y, $d) entspricht:</p>";
        echo "<p>PPI: " . round($PPI, 0) . "</p>";
    }
}
?>
</body>
</html>
