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
	
	$Deger		=	"Merhaba Benim Adım Volkan Alakent Ben 08.12.1980 Doğumluyum.";
	$Desen		=	"/ \d{1,2}\.\d{1,2}\.\d{4} /";
	preg_match($Desen, $Deger, $Sonuc);
	
	echo $Deger . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	echo "<br />";

	echo "<a href=https://www.btkakademi.gov.tr/portal/course/player/deliver/php-6509> Bu ders ile ilgili daha fazla bilgi icin bu videoyu izleyebilirsiniz.</a>";
	
	?>
</body>
</html>