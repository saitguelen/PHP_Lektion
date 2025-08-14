<!DOCTYPE html>
<html lang="en,de,tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAiT PHP</title>
</head>
<body>

    <?php
    /*
    list()		:	Dizinin elemanlarını değişkenlere atamak için kullanılır.
    slice()		:	Dizinin belirli bir bölümünü almak için kullanılır.
    splice()	:	Dizinin belirli bir bölümünü kesip almak için kullanılır.
    */
    echo "list() ==> Dizinin elemanlarını değişkenlere atamak için kullanılır.<br />";
    echo "slice() ==> Dizinin belirli bir bölümünü almak için kullanılır.<br />";
    echo "splice() ==> Dizinin belirli bir bölümünü kesip almak için kullanılır.<br />";
    echo "<hr />";

    $Isimler	=	array("Volkan", "Onur", "Hakan", "Banu", "Aslı");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    list($A, $B, $C) = $Isimler;
    echo "list() ile atanan değişkenler : $A, $B, $C";
    echo "<br />";
    echo "<hr />";


    //eger dizi cok boyutlu olsaydi
    echo "eger dizi cok boyutlu olsaydi<br /> ozamam  icice list uygulamaliyiz..<br /> ";
    $Renkler	=	array("Kırmızı", "Mavi", "Yeşil", array("Sarı", "Turuncu", "Mor"));
    echo "<pre>";
    print_r($Renkler);
    echo "</pre>";

    list($R1, $R2, $R3, list($R4, $R5, $R6)) = $Renkler;
    echo "list() ile atanan değişkenler : $R1, $R2, $R3, $R4, $R5, $R6";
    echo "<br />";
    echo "<hr />";
    $Sonuc		=	array_slice($Isimler, 1, 3);
    // $Sonuc		=	slice($Isimler, 1, 3); // slice() fonksiyonu PHP'de yok, array_slice() kullanılır.
    echo "<br />";
    echo "slice() ile elde edilen dizi : ";
    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";

    echo "<br />";
    echo "<hr />";

    $Sonuc2		=	array_splice($Isimler, 1, 3);
    echo "splice() ile elde edilen dizi : ";
    echo "<pre>";
    print_r($Sonuc2);
    echo "</pre>";

    echo "<br />";
    echo "<hr />";

    ?>

</body>
</html>