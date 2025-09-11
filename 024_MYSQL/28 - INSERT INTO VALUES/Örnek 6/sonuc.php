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
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinin de / verilerini de eklemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Gelenadi		=	$_POST["ad"];
	$Gelensoyadi		=	$_POST["soyad"];
	$Gelenyas			=	$_POST["yas"];
	$Gelensinif			=	$_POST["sinif"];
	$Gelennotort			=	$_POST["not_ort"];
	
	
	$Ekle	=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO ogrenciler (ad, soyad, yas, sinif, not_ort) values ('$Gelenadi', '$Gelensoyadi', '$Gelenyas', '$Gelensinif', '$Gelennotort')");
		if($Ekle){
			header("Location:index.php");
			exit();
		}else{
			echo "Sorgu Hatası<br /><br />";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>