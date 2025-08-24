<?php
    echo "<p>Geben Sie bitte drei Werte ein?</p>";
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
<form action="pixeldichte.php" method="get">

<div>
    <p>
    <label for="x">Pixel in der Breite:</label>
</p>
    <input type="number" name="x" id="br" size="25" step="0.01" required>
</div>
<div>
    <p>
    <label for="y">Pixel in der Höhe:</label>
</p>
    <input type="number" name="y" id="hh" size="25" step="0.01" required>
</div>
<div>
    <p>
    <label for="d">Zoll</label>
</p>
    <input type="number" name="d" id="zll" size="25" step="0.01" required>
</div>

<div>
    <input type="submit" value="Rechnen">
    <input type="reset" value="Zurücksetzen">
</div>
</form>  

<?php
function ppi($x,$y,$d) {
    
$PPI=(($x**2+$y**2)**(1/2))/$d;
    if ($d == 0) {
        return 0; // Schwarz
    }
    return sqrt(($x ** 2) + ($y ** 2)) / $d;
}
if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['d'])) {
    $x = floatval($_GET['x']);
    $y = floatval($_GET['y']);
    $d = floatval($_GET['d']);
    
    $PPI = ppi($x, $y, $d);

    // RGB zu CMYK umwandeln
    //list($c, $m, $y, $k) = rgbToCmyk($r, $g, $b);
    
echo "<h3>Ergebnis:</h3>";
    echo "<p>Breite,Höhe,Zoll ($x, $y, $d) entspricht:</p>";
    echo "<p>PPI: " . round($PPI ) . " ppi</p>";
    
}
?>
</body>
</html>