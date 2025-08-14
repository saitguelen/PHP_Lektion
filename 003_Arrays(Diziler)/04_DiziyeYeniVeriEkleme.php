<!DOCTYPE html>
<html lang="en,de,tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAIT PHP</title>
</head>
<body>
    <?php

    $Degerler = array("Volkan", "Alakent", "Masa", "Vapur", "Mavi", "PHP", "Sinema");

    echo "<pre>";
    print_r($Degerler);
    echo "</pre>";
    echo "<hr>";
    $Degerler[] = "Yeni Eleman";


    echo "<p> Yeni eleman eklemek icin \$Degerler[] = \"Yeni Eleman\";  yapisini kullanabilirsiniz.</p>";


    echo "<pre>";
    echo "Diziye yeni bir eleman eklendi:";
    print_r($Degerler);
    echo "</pre>";

    $Dizi = array("Elma", "Armut", "Muz");
    echo "<pre>";
    print_r($Dizi);
    echo "</pre>";
    echo "<hr>";
    echo "<p> Simdi dizimize yeni eleman ekleyelim</p>";

    // Diziye yeni bir eleman ekleme
    $Dizi[] = "Çilek";
    echo "<pre>";
    print_r($Dizi);
    echo "</pre>";

    echo "<p> Ayrica diziye yeni eleman eklemek icin array_push() fonksiyonunu kullanabilirsiniz.</p>";

    array_push($Dizi, "Kivi", "Mango");
    echo "<pre>";
    print_r($Dizi);
    echo "</pre>";
    echo "<br>";
    echo "<hr>";

    echo "<p> Dizideki elemanlari degistirmek icin dizinin index numarasini kullanabilirsiniz.</p>";
    //Dizide index degismek icin
    $Dizi[1] = "Yeni Değer";
    echo "<pre>";
    print_r($Dizi);
    echo "</pre>";
    echo "<br>";
    echo "<hr>";

    echo "<p> Dizideki elemanlari silmek icin unset() fonksiyonunu kullanabilirsiniz.</p>";
    //Dizide eleman silmek icin
    unset($Dizi[2]);
    echo "<pre>";
    print_r($Dizi);
    echo "</pre>";
    echo "<br>";
    echo "<hr>";

    echo "<p> Dizi icersinde anahtar degerler atayabiliriz</p>";
    echo "<p><pre> <code>$'Dizii = array(
        meyve1 => Coconat,
        meyve2 > Muz,
        meyve3 => Ananas
    );</code></pre></p>";

    $Dizii = array(
        "meyve1" => "Coconat",
        "meyve2" => "Muz",
        "meyve3" => "Ananas"
    );

    echo "<pre>";
    print_r($Dizii);
    echo "</pre>";
    echo "<hr>";


    //Dizilerde icice cok boyutlu diziler yapabiliriz.
    echo "<p> Dizilerde icice cok boyutlu diziler yapabiliriz.</p>";

    $CokBoyutluDizi = array(
        "meyve" => array(
            "meyve1" => "Coconat",
            "meyve2" => "Muz",
            "meyve3" => "Ananas"
        ),
        "sebze" => array(
            "sebze1" => "Havuc",
            "sebze2" => "Salatalik",
            "sebze3" => "Domates"
        ),
        "tahıl" => array(
            "tahıl1" => "Buğday",
            "tahıl2" => "Arpa",
            "tahıl3" => "Mısır"
        ),
        "baklagil" => array(
            "baklagil1" => "Mercimek",
            "baklagil2" => "Nohut",
            "baklagil3" => "Fasulye"
        )
    );

    echo "<pre>";
    print_r($CokBoyutluDizi);
    echo "</pre>";
    echo "<hr>";

    echo "<p> Veya basdaki arrayin elemani olarakda diziler olusturabiliriz.</p>";

    $CokBoyutluDizi2 = array("Volkan","Hakan", array("Meyve" => "Elma", "Sebze" => "Havuc", array("Tahıl" => "Buğday", "Baklagil" => "Mercimek")), "Sait");

    echo "<pre>";
    print_r($CokBoyutluDizi2);
    echo "</pre>";

    echo "<hr>";
    echo "<p> Dizilerdeki elemanlara ulasmak icin dizinin anahtar degerini kullanabilirsiniz.</p>";

    echo $CokBoyutluDizi2[0] . "<br>"; // Volkan
    echo $CokBoyutluDizi2[1] . "<br>"; // Hakan
    echo $CokBoyutluDizi2[2]["Meyve"] . "<br>"; // Elma
    echo $CokBoyutluDizi2[2]["Sebze"] . "<br>"; // Havuc
    echo $CokBoyutluDizi2[2][0]["Tahıl"] . "<br>"; // Tahıl
    echo $CokBoyutluDizi2[2][0]["Baklagil"] . "<br>"; // Baklagil
    echo $CokBoyutluDizi2[3] . "<br>"; // Sait

    ?>
</body>
</html>