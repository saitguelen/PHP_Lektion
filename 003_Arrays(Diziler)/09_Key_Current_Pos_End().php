<!doctype html>
<html lang="en,de,tr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>SAIT PHP</title>
</head>

<body>
	<?php
	/*
	key()		:	Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.
	*/

    echo "key() ==> Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.<br />";
    $Ornek = array("Sait","Murat","Hakan","Asena");
    echo "<pre>";
    print_r($Ornek);
    echo "</pre>";
    $Sonuc1 = key($Ornek);
    echo "Dizinin göstericisi konumundaki elemanın anahtar değeri: " . $Sonuc1 . "<br />";
    echo "Neden? Cünkü eger biz bir anahtar deger olusturmazsak 0 (Sifir) olur.";

	
	$Isimler	=	array("A1" => array("Aslı", "Hale"), "A2" => "Volkan", "A3" => "Hakan", "A4" => "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc		=	key($Isimler);
	echo "Dizinin göstericisi konumundaki elemanın anahtar değer : " . $Sonuc;

    echo "<hr />";

    /*
	current()	:	Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	pos()		:	Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	*/
	echo "current() ==> Dizinin göstericisi konumundaki elemanın değerini bulmak için kullanılır.<br />";
    echo "pos() ==> Dizinin göstericisi konumundaki elemanın değerini bulmak için kullanılır.<br />";
    echo "<hr />";
    
	$Isimler3	=	array("A1" => "Volkan", "A2" => "Onur", "A3" => "Hakan");
	
	echo "<pre>";
	print_r($Isimler3);
	echo "</pre>";
	
	$Sonuc3		=	pos($Isimler3);
	// $Sonuc3		=	current($Isimler3); // current() ve pos() aynı işlemi yapar.
	
	echo "Dizinin göstericisi konumundaki elemanın değeri : " . $Sonuc3;
    echo "<br />";
	echo "<p> current() ve pos() aynı işlemi yapar.</p>";
	echo "<hr />";

	echo "end() ==> Dizi göstericisinin son konumundaki elemanı bulmak için kullanılır.<br />";
    /*
	end() 	:	Dizi göstericisinin son konumundaki elemanı bulmak için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Onur", "Hakan", array("Banu", "Aslı"));
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc2		=	end($Isimler);
	
	echo "Dizi göstericisinin son konumundaki elemanın değeri : ";
	echo "<pre>";
	print_r($Sonuc2);
	echo "</pre>";

	?>
</body>
</html>