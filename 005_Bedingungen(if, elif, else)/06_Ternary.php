<!doctype html>
<html lang="tr-TR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>
    <?php
    /*
	?:		=	ternary operatörü (Üçlü operatör)
	
	Yapısı :
	(Koşul veya Koşullar) ? Geçerli ifade : Geçersiz ifade ;
	*/

    $Deger        =    1;

    $Mesaj1        =    "Merhaba Volkan Nasılsın?";
    $Mesaj2        =    "Merhaba Hakan Nasılsın?";

    $Sonuc        =     ($Deger == 1) ? $Mesaj1 : $Mesaj2;

    echo $Sonuc;

    echo "<br/>";
    echo "<hr/>";
    echo "Simdi de baska bir örnek yapalim: <br/>";

    $Rakam = 16;
    $Mesaj12        =    "Bu rakam 20'den kücük";
    $Mesaj21        =    "Bu rakam 20'den büyük!";


    $Sonuc2 = ($Rakam < 20) ? $Mesaj12 : $Mesaj21;

    echo $Sonuc2;
    echo "<br/>";
    echo "<hr/>";

    ?>
</body>

</html>