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
	
	const DEGERLER	= array("Volkan", "Hakan", "Onur");

    $array1= ["Sait", "Nesibe", "Jakob Ali", "Mucteba", 10, 12.5];

	echo "<pre>";
	print_r(DEGERLER);
	echo "</pre>";

    echo "<br><br>";
    echo "yada define() fonksiyonu ile sabit tanımlamak için:";
    echo "<br>";
    echo "define('DEGERLER', array('Volkan', 'Hakan', 'Onur'));";
    echo "<br><br>";
    //mesela
    echo "define() fonksiyonu ile sabit tanımlamak için:";
    echo "<br>";
    
    define("YENI", array("Merhaba", "Dünya"));
    echo "<pre>";
    print_r(YENI);
    echo "</pre>";  

	echo "<pre>";
	print_r($array1);
	echo "</pre>";

    //oder wir schreiben mit foreach schleife
    foreach ($array1 as $value) {
        print_r($value . "<br>");
    }

 
    echo "<br><br>";
    echo "ayni degisken adini kullanarak da dizi olusturabiliriz:";
    echo "<br>";

    /*
	$Isimler	=	array("Volkan", "Hakan", "Onur");
	$Isimler	=	["Volkan", "Hakan", "Onur"];
	
	$Isimler	=	array("PHPEgitmeni" => "Volkan", "HTML5Egitmeni" => "Hakan", "CSS3Egitmeni" => "Onur");
	$Isimler	=	["PHPEgitmeni" => "Volkan", "HTML5Egitmeni" => "Hakan", "CSS3Egitmeni" => "Onur"];
	*/
	
	$Isimler["PHPEgitmeni"]		=	"Volkan";
	$Isimler["HTML5Egitmeni"]	=	"Hakan";
	$Isimler["CSS3Egitmeni"]	=	"Onur";
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br /><br />";
	
	echo $Isimler["PHPEgitmeni"] . "<br />";
	echo $Isimler["HTML5Egitmeni"] . "<br />";
	echo $Isimler["CSS3Egitmeni"];

    echo "<br><br>";
    echo "biz degisken ismi kullanmasak da PHP kendi otomatik isimlendirmesini yapar:";
    echo "<br>";
    
    $Isimler[]						=	"Volkan";
	$Isimler["HTML5Egitmeni"]		=	"Hakan";
	$Isimler["CSS3Egitmeni"]		=	"Onur";
	$Isimler[]						=	"Serkan";
	$Isimler["XmlEgitmeni"]			=	"Ümit";
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br /><br />";
	
	echo $Isimler[0] . "<br />";
	echo $Isimler["HTML5Egitmeni"] . "<br />";
	echo $Isimler["CSS3Egitmeni"] . "<br />";
	echo $Isimler[1] . "<br />";
	echo $Isimler["XmlEgitmeni"];

	?>
</body>
</html>