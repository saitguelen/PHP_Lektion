<?php

echo "Eine Funktion ist wie ein Taschenrechner. Du gibst etwas ein, sie rechnet, und mit return zeigt sie dir das Ergebnis.";
echo "<br />";
function berechneMwst($netto) {
    return $netto*1.19;
}
$brutto = berechneMwst(100);
echo "Bruttopreis: $brutto €";

echo "<br />";
echo "<p>Verwendung des Rückgabewerts in einer Operation</p>";
function rabattPreis($preis, $rabatt) {
    return $preis - ($preis * $rabatt / 100);
}

$endpreis = rabattPreis(200, 20);
echo "Endpreis nach Rabatt: $endpreis €";


?>