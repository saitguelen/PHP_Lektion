<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gettype()</h1>
    <p><strong><code>gettype()</code></strong> : Herhangi bir degisken iceriginin veri türünü bularak, buldugu degeri geriye döndürür.</p>
    <br>
    <hr>
    

        <?php

        /*

    gettype()   : Herhangi bir degisken iceriginin veri türünü bularak, buldugu degeri geriye döndürür.

    */
        $Deger = "Sait Gülen";
        $Sonuc = gettype($Deger);
        echo $Deger . "<br/>";
        echo "Veri türü: " . $Sonuc;

        echo "<hr>";
        echo "<br>";

        $Sayi1 = 12;
        $Sonuc1 = gettype($Sayi1);
        echo $Sayi1 . "<br/>";
        echo "Veri türü: " . $Sonuc1;

        echo "<hr>";
        echo "<br>";

        $Sayi2 = 12.25;
        $Sonuc2 = gettype($Sayi2);
        echo $Sayi2 . "<br/>";
        echo "Veri türü: " . $Sonuc2;

        echo "<hr>";
        echo "<br>";

        $Sayi3 = array("Sait", "Gülen", 12, 12.5, true);
        $Sonuc3 = gettype($Sayi3);
        print_r($Sayi3) . "<br/>";
        echo "Veri türü: " . $Sonuc3;

        echo "<hr>";
        echo "<br>";
        $Sayi4 = true;
        $Sonuc4 = gettype($Sayi4);
        echo $Sayi4 . "<br/>";
        echo "Veri türü: " . $Sonuc4;

        echo "<hr>";
        echo "<br>";

        class Deneme
        {
            public $Isim = "Sait Gülen";
        }

        $Islem = new Deneme;
        $Sonuc5 = gettype($Islem);

        echo $Islem->Isim . "<br/>";

        echo "Veri türü :" . $Sonuc5;

        echo "<hr>";
        echo "<br>";

        $Sayi6 = null;
        $Sonuc6 = gettype($Sayi6);
        echo $Sayi6 . "<br/>";
        echo "Veri türü: " . $Sonuc6;

        echo "<hr>";
        echo "<br>";
        ?>
</body>

</html>