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
	try{
		$VeritabaniBaglantisiBir	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
		echo "1. Veritabanına Bağlantı Kuruldu<br />";
	}catch(PDOException $HataMesajiBir){
		echo "1. Veritabanı Bağlantı Hatası<br />";
		echo "1. Hata Açıklaması : " . $HataMesajiBir->getMessage();
		die();
	}
	
	$VeritabaniBaglantisiBir	=	null;
	
	try{
		$VeritabaniBaglantisiIki = new PDO ("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
		echo "Baglanti 2, veritabanina baglandi. <br  />";

	}catch(PDOException $HataMesajiIki){
		echo "1. Veritabanı Bağlantı Hatası<br />";
		echo "1. Hata Açıklaması : " . $HataMesajiIki->getMessage();
		die();

	}
	$VeritabaniBaglantisiIki = null;
	
	?>
</body>
</html>