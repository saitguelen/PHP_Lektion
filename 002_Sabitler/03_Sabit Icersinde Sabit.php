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
	
	$Islem	=	"Extra Eğitim";
	$islem2= "Bu bir sabit icersinde sabit atama uygulamasidir.";

	define("TEST", $islem2);
	define("VERI2", TEST);
	
	define("ICERIK", $Islem);
	
	define("VERI", ICERIK);
	
	echo VERI;
	echo "<br />";
	echo VERI2;
	
	?>
</body>
</html>