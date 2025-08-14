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
    next()		:	Dizinin göstericisini bir sonraki eleman konumuna taşımak için kullanılır.
    prev()		:	Dizinin göstericisini bir önceki eleman konumuna taşımak için kullanılır.
    reset()		:	Dizinin göstericisini ilk eleman konumuna yani varsayilan konuma taşımak için kullanılır.
    */
    echo "next() ==> Dizinin göstericisini bir sonraki eleman konumuna taşımak için kullanılır.<br />";
    echo "prev() ==> Dizinin göstericisini bir önceki eleman konumuna taşımak için kullanılır.<br />";
    echo "reset() ==> Dizinin göstericisini ilk eleman konumuna yani varsayilan konuma taşımak için kullanılır.<br />";
    echo "<hr />";

    $Isimler	=	array("Volkan", "Onur", "Hakan", array("Banu", "Aslı", "Hale"));

    echo "<pre>";
    print_r($Isimler);
    echo "</pre><br />";

    $Sonuc		=	reset($Isimler);
    echo "Dizinin göstericisi konumundaki elemanın değeri -- reset() ile: " . $Sonuc;
    echo "<br />";

    $Sonuc		=	next($Isimler);
    echo "Dizinin göstericisi konumundaki elemanın değeri -- next() ile: " . $Sonuc;
    echo "<br />";

    $Sonuc		=	prev($Isimler);
    echo "Dizinin göstericisi konumundaki elemanın değeri -- prev() ile: " . $Sonuc;
    echo "<br />";

    $Sonuc		=	reset($Isimler[3]);
    echo "Dizinin göstericisi konumundaki elemanın değeri -- reset() ile: " . $Sonuc;
    echo "<br />";

    $Sonuc		=	next($Isimler[3]);
    echo "Dizinin göstericisi konumundaki elemanın değeri -- next() ile: " . $Sonuc;
    echo "<br />";

    $Sonuc		=	prev($Isimler[3]);
    echo "Dizinin göstericisi konumundaki elemanın değeri -- prev() ile: " . $Sonuc;
    echo "<br />";
    ?>

</body>
</html>