<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP Dizi İçerisinde Değişken veya Sabit Tanımlama</title>
</head>

<body>
	<?php
	
	$Isim				=	"Volkan";
	$Soyisim			=	"Alakent";
	
	define("ESYA", "Masa");
	define("ARAC", "Vapur");
	
	const RENK			=	"Mavi";
	const YAZILIMDILI	=	"PHP";
	
	$Degerler	=	array($Isim, "Soyadi" => $Soyisim, ESYA, ARAC, "Renk" => RENK, YAZILIMDILI, "Aktivite" => "Sinema");
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";

	$Isim				=	"Volkan";
	$Soyisim			=	"Alakent";
	
	define("ESYAESYA", "Masa");
	define("ARACARAC", "Vapur");
	
	const RENKRENK		=	"Mavi";
	const YAZILIMDILIRENK	=	"PHP";
	
	$Degerler	=	array($Isim, $Soyisim, ESYAESYA, ARACARAC, RENKRENK, YAZILIMDILIRENK, "Sinema");
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	
	?>
</body>
</html>