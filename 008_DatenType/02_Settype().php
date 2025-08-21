<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Settype()</h1>
    <p><strong><code>settype()</code></strong> : Herhangi bir degisken iceriginin veri türünü belirlemek / degismek icin kullanilir
    </p>
    <br>
    <hr>
    <?php
    /*
    settype()  :   Herhangi bir degisken iceriginin veri türünü belirlemek / degismek icin kullanilir
    */

    $Deger = 853.45;
    $DegerIcerigininVeriTürü = gettype($Deger);

    echo "Icerigin Ilk Hali: " . $Deger . "<br/>";
    echo "Iceriginin Ilk Halinin Veri Türü: " . $DegerIcerigininVeriTürü . "<br/>";
    $Sonuc = $Deger + 5;
    echo $Sonuc;
    echo "<hr>";
    echo "<br>";

    settype($Deger, "integer");

    $DegerIcerigininSonVeriTürü = gettype($Deger);

    echo "Icerigin Son Hali: " . $Deger . "<br/>";
    echo "Iceriginin Son Halinin Veri Türü: " . $DegerIcerigininSonVeriTürü . "<br/>";

    $Sonuc2 = $Deger + 5;
    echo $Sonuc2;

    echo "<hr>";
    echo "<br>";




    ?>
</body>

</html>