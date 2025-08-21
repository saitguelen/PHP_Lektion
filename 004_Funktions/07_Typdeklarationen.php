<!DOCTYPE html>
<html lang="en,de,tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typdeklarationen</title>
</head>
<body>
    <h1>Typdeklarationen</h1>
    <p>
        <pre>
Seit PHP 7 kann man Funktionen mit <strong>Typdeklarationen</strong> versehen.
Das bedeutet, man gibt an, welchen Datentyp die Parameter und der Rückgabewert haben sollen. 
Das macht den Code sicherer und leichter verständlich.
🧠 :
„Du sagst der Funktion: ‚Du darfst nur diesen Typ von Daten bekommen.‘ Wenn du etwas Falsches gibst, meckert PHP.“

🧠  Hinweise:
Tip tanımlamaları: int, float, string, bool, array, object, callable, iterable
PHP 7.1 ile birlikte nullable types geldi: ?int gibi → null veya int olabilir.
PHP 8 ile birlikte union types geldi: int|float gibi → birden fazla tip kabul edilebilir.
    </pre></p>
    <p><pre><code>
        
function berechneRabatt(float $preis, int $rabatt): float {
    return $preis - ($preis * $rabatt / 100);
}

echo berechneRabatt(100.0, 20); // 80.0


    </code></pre></p>
<h2>Beispiel:</h2>
<p>Bir fonksiyon yaz: ürün fiyatı (float) ve indirim oranı (int) alsın, indirimli fiyatı float olarak döndürsün. Yanlış tip verilirse hata versin</p>
<p>Schreiben Sie eine Funktion: Nehmen Sie den Produktpreis (float) und den Rabattsatz (int) und geben Sie den rabattierten Preis als float zurück. <br>
Geben Sie einen Fehler aus, wenn der falsche Typ angegeben wird.</p>

    <form method="post">
        <label>Produkt Preis</label>
        <input type="number" name="preis" required><br>

        <label>Produkt Rabatt</label>
        <input type="number" name="rabatt" required><br>

        <input type="submit" value="Berechnen"><br>




    </form>
    <?php

    function berechneRabatt(float $preis, int $rabatt) {
        return $preis - ($preis*$rabatt/100);


    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $preis= (float)$_POST["preis"];
        $rabatt = (int)$_POST["rabatt"];
    }

    if(!is_float($preis) || !is_int($rabatt)){
        echo "Bitte geben Sie eine Dezimalzahl als Preis und ganzezahl als rabatt ein";
    }else {
        $endpreis = berechneRabatt($preis, $rabatt);
        echo "<p> Sie haben $preis kostet  und % $rabatt rabatt eingegeben</p>";


        echo "<p> Endpreis nach Rabatt: ". number_format($endpreis,2). " €</p>";
    }
    
    
     


    ?>

    

    
</body>
</html>