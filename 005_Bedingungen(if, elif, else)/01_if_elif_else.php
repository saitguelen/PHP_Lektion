<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Sait PHP</title>
</head>

<body>
	<?php
	/*
	if			=	Eğer.
	elseif		=	Değilse eğer.
	else		=	Değilse.
	
	Yapısı :
	
	if(Koşul veya Koşullar){
		Kod blokları
	}elseif(Koşul veya Koşullar){
		Kod blokları
	}else{
		Kod blokları
	}
	*/
	
	$Deger1		=	"Volkan";
	$Deger2		=	"Hakan";
	$Deger3		=	"Onur";
	$Deger4		=	"Ümit";
	
	if($Deger1 == "Sait"){
		echo "if koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif($Deger2 == "Sait"){
		echo "1. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif($Deger3 == "Sait"){
		echo "2. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif($Deger4 == "Sait"){
		echo "3. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}else{
		echo "if koşulu geçersiz oldu ve else kod bloğu çalıştı.";
	}

    echo "<br>";
    echo "<hr>";
    echo "Simdi de saat verelim ve saatin durumuna göre günaydin, tünaydin veya iyi geceler desin. <br/>";

    $Saat		=	15;
	
	if(($Saat >= 0) and ($Saat <= 6)){
		echo " Saat: ". $Saat. " İyi geceler.";
	}elseif(($Saat > 6) and ($Saat <= 9)){
		echo "Saat: ". $Saat. "  Günaydın.";
	}elseif(($Saat > 9) and ($Saat <= 17)){
		echo "Saat: ". $Saat. " İyi günler.";
	}elseif(($Saat > 17) and ($Saat <= 23)){
		echo "Saat: ". $Saat. " İyi akşamlar.";
	}else{
		echo "Belirtilen değer ( {$Saat} ) bir saat dilimi değildir.";
	}
	
	?>
</body>
</html>