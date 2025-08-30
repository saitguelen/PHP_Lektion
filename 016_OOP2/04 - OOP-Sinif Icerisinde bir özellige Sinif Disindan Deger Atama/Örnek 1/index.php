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
	
	class Deneme{
		
		public $Isim	=	"";
		public $Soyisim =	"";
		public $Yas		=   "";
		
	}
	
	$Islem				=	new Deneme;
	$Islem->Isim 		= 	"Sait";	
	$Islem->Soyisim 	= 	"Gülen";	
	$Islem->Yas			=    38;
	
	echo $Islem->Isim . " " . $Islem->Soyisim. "  ". "Yas: ". $Islem->Yas. "<br/>";
	
	echo $Islem->Isim . "<br/> " . $Islem->Soyisim. "<br/> " . "Yas: ". $Islem->Yas;
	
	?>
</body>
</html>