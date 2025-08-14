<!DOCTYPE html>
<html lang="en,de,tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonyme Funktionen</title>
</head>

<body>
    <h1>Anonyme Funktionen</h1>
    <p>
        Eine normale Funktion hat einen Namen. <br>
        Aber wenn du nur einmal etwas Kleines tun willst, brauchst du keinen Namen. <br>
        Du speicherst die Funktion in einer Box (Variable) und rufst sie auf, wenn du sie brauchst.<br>
    </p>
    <p><pre>
        🧠 Notlar / Hinweise:
            Anonim fonksiyonlar function(...) { ... } şeklinde tanımlanır.
            Genellikle bir değişkene atanır.
            use anahtar kelimesi ile dış değişkenlere erişim sağlanabilir (closure konusu).
    </pre></p>

    <?php

    echo "<h2>Berechnungsfunktion</h2><br>";

    $berechneRabatt = function ($preis, $rabatt) {
        return $preis - ($preis * $rabatt / 100);
    };
    
    /* normal fonksiyon
       function rabattPreis($preis,$rabatt){
        return $preis - ($preis * $rabatt / 100);
    }
    */

    $endpreis = $berechneRabatt(150, 20);
    echo "Endpreis: $endpreis €";

    // $begrüßung = function ($name) {
    //     echo "Hallo, $name!";
    // };

    // $begrüßung("Sait");
    // echo "<br>";

    
    ?>



</body>

</html>