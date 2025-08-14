<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilfreiches und Nützliches</title>
</head>

<body>
    <h1>Hilfreiches und Nützliches Funktionen</h1>
    <p>
    <pre>
🔍 Önemli Fonksiyonlar
✅ isset($var)
Bir değişkenin tanımlı olup olmadığını ve null olmadığını kontrol eder.

$preis = 100;
if (isset($preis)) {
    echo "Preis ist gesetzt.";
}



✅ empty($var)
Bir değişkenin boş olup olmadığını kontrol eder. Boş sayılan değerler: "", 0, "0", null, false, array().

$rabatt = "";
if (empty($rabatt)) {
    echo "Rabatt ist leer.";
}



✅ is_null($var)
Değişkenin değeri tam olarak null mı diye kontrol eder.

$wert = null;
if (is_null($wert)) {
    echo "Wert ist NULL.";
}


✅ unset($var)
Bir değişkeni tamamen siler.
$produkt = "Laptop";
unset($produkt);
// echo $produkt; // Hata verir çünkü artık tanımlı değil


🧪 Örnek: Hepsi Bir Arada

$preis = 100;
$rabatt = "";

if (isset($preis)) {
    echo "Preis ist gesetzt.<br>";
}

if (empty($rabatt)) {
    echo "Rabatt ist leer.<br>";
}

$wert = null;
if (is_null($wert)) {
    echo "Wert ist NULL.<br>";
}

unset($preis);
if (!isset($preis)) {
    echo "Preis wurde gelöscht.<br>";
}



🧠 Notlar / Hinweise:
isset() ve empty() çok sık kullanılır, özellikle form verisi kontrolünde.
unset() ile bir değişkeni bellekten tamamen kaldırabilirsin.
is_null() sadece null değerini kontrol eder, empty() daha geniştir.
        </pre>
    </p>

    <?php
    $preis = 100;
    $rabatt = "";

    if (isset($preis)) {
        echo "Preis ist gesetzt.<br>";
    }

    if (empty($rabatt)) {
        echo "Rabatt ist leer.<br>";
    }

    $wert = null;
    if (is_null($wert)) {
        echo "Wert ist NULL.<br>";
    }

    unset($preis);
    if (!isset($preis)) {
        echo "Preis wurde gelöscht.<br>";
    }
    ?>



</body>

</html>