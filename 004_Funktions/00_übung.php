<!DOCTYPE html>
<html lang="en,de,tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubungen</title>
</head>

<body>
    <h1>Übungen</h1>
    <?php
    echo "empty <br/>";
    $rabatt = 15;
    if (empty($rabatt)) {
        echo "Rabatt ist leer.";
    } else {
        echo "Unser Rabatt ist $rabatt";
    }
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    echo "isset <br/>";
    $preis = 100;  //$preis = null; //==>print-->"Kein Preis eingegeben"
    if (isset($preis)) {
        echo "Preis ist gesetzt. Preis ist $preis ";
    } else {
        echo "Kein Preis eingegeben";
    }

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "is_null <br/>";
    $wert = null;
    if (is_null($wert)) {
        echo "Wert ist NULL.";
    }
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "unset <br/>";
    $produkt = "Laptop";
    echo $produkt;echo "<br/>";
    unset($produkt);
    echo "echo produkt  Hata verir çünkü artık tanımlı değil";
    // echo $produkt; // Hata verir çünkü artık tanımlı değil


    ?>

</body>

</html>