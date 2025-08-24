<?php
    echo "<p>Geben Sie bitte Farbe ein?</p>";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <style>
        body{font-family: Helvetica, sans-serif;
             font-size: 18px;
        }
        input{font: inherit;}
        div{margin-top: 1.5em;}
    </style>
</head>
<body>
<form action="RGB_nach_CMYK.php" method="get">

<div>
    <p>
    <label for="rot">Rot</label>
</p>
    <input type="number" name="r" id="rt" size="25">
</div>
<div>
    <p>
    <label for="gruen">Grün</label>
</p>
    <input type="number" name="g" id="gr" size="25">
</div>
<div>
    <p>
    <label for="blau">Blau</label>
</p>
    <input type="number" name="b" id="bl" size="25">
</div>

<div>
    <input type="submit" value="Rechnen">
    <input type="reset" value="Zurücksetzen">
</div>
</form>  

<?php
function rgbToCmyk($r, $g, $b) {
    // Werte auf 0 bis 1 normalisieren
    $r /= 255;
    $g /= 255;
    $b /= 255;

    // Bestimme den Maximalwert für w
    $w = max($r, $g, $b);

    // Vermeide eine Division durch Null
    if ($w == 0) {
        return [0, 0, 0, 1]; // Schwarz
    }

    // CMYK berechnen
    $c = ($w - $r) / $w;
    $m = ($w - $g) / $w;
    $y = ($w - $b) / $w;
    $k = 1 - $w;

    return [$c, $m, $y, $k];
    echo "C: $c, M: $m, Y: $y, K: $k";
}

if (isset($_GET['r']) && isset($_GET['g']) && isset($_GET['b'])) {
    $r = intval($_GET['r']);
    $g = intval($_GET['g']);
    $b = intval($_GET['b']);

    // RGB zu CMYK umwandeln
    list($c, $m, $y, $k) = rgbToCmyk($r, $g, $b);
    
echo "<h3>Ergebnis:</h3>";
    echo "<p>RGB ($r, $g, $b) entspricht:</p>";
    echo "<p>C: " . round($c , 8) . "</p>";
    echo "<p>M: " . round($m , 8) . "</p>";
    echo "<p>Y: " . round($y , 8) . "</p>";
    echo "<p>K: " . round($k , 8) . "</p>";
}
?>
</body>
</html>