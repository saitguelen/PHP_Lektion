    nj<!doctype html>
<html lang="tr-TR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Sait PHP</title>
</head>

<body>
	<h1>Switch - Case - Break- Default</h1>
	<p>
	<pre>
            /*
	switch		=	Koşul başlat.
	case		=	Koşul kontrol et.
	break		=	Koşul kontrolünü sonlandır.
	default		=	Koşul olumsuzlukları sonucu.
	
	Yapısı :
	
	switch(Koşul){
		case Kontrol ifadesi:
			Kod blokları
		break;
		default:
			Kod blokları
	}
	
	*/
        </pre>
	</p>
	<?php
	/*
	switch		=	Koşul başlat.
	case		=	Koşul kontrol et.
	break		=	Koşul kontrolünü sonlandır.
	default		=	Koşul olumsuzlukları sonucu.
	
	Yapısı :
	
	switch(Koşul){
		case Kontrol ifadesi:
			Kod blokları
		break;
		default:
			Kod blokları
	}
	
	*/

	$AyAdi	=	"Temmuz";

	switch ($AyAdi) {
		case $AyAdi == "Ocak":
			echo $AyAdi . " ayı 1. aydır.";
			break;
		case $AyAdi == "Şubat":
			echo $AyAdi . " ayı 2. aydır.";
			break;
		case $AyAdi == "Mart":
			echo $AyAdi . " ayı 3. aydır.";
			break;
		case $AyAdi == "Nisan":
			echo $AyAdi . " ayı 4. aydır.";
			break;
		case $AyAdi == "Mayıs":
			echo $AyAdi . " ayı 5. aydır.";
			break;
		case $AyAdi == "Haziran":
			echo $AyAdi . " ayı 6. aydır.";
			break;
		case $AyAdi == "Temmuz":
			echo $AyAdi . " ayı 7. aydır.";
			break;
		case $AyAdi == "Ağustos":
			echo $AyAdi . " ayı 8. aydır.";
			break;
		case $AyAdi == "Eylül":
			echo $AyAdi . " ayı 9. aydır.";
			break;
		case $AyAdi == "Ekim":
			echo $AyAdi . " ayı 10. aydır.";
			break;
		case $AyAdi == "Kasım":
			echo $AyAdi . " ayı 11. aydır.";
			break;
		case $AyAdi == "Aralık":
			echo $AyAdi . " ayı 12. aydır.";
			break;
		default:
			echo $AyAdi . " bir ay adı değildir.";
	}

	echo "<br/>";
	echo "<hr/>";
	echo "Simdi de baska bir örnek yapalim: <br/>";

	$Saat = 18;

	switch ($Saat) {
		case ($Saat > 0) and ($Saat < 6):
			echo "Saat: " . $Saat . "<br/> Size iyi geceler!";
			echo "<br/>";
			echo "<hr/>";
			break;
		case ($Saat > 6) and ($Saat < 9):
			echo "Saat: " . $Saat . "<br/> Size Günaydin!!";
			echo "<br/>";
			echo "<hr/>";
			break;
		case ($Saat > 9) and ($Saat < 17):
			echo "Saat: " . $Saat . "<br/> Size Iyi Günler!!";
			echo "<br/>";
			echo "<hr/>";
			break;
		case ($Saat > 14) and ($Saat < 23):
			echo "Saat: " . $Saat . "<br/> Size iyi geceler!!!";
			echo "<br/>";
			echo "<hr/>";
			break;
		default:
			echo "Lütfen gecerli bir saat girin 0 ile 24 arasinda olsun";
			echo "<br/>";
			echo "<hr/>";
	}

	?>
</body>

</html>