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
	
	$VeritabaniBaglantisi		=	mysqli_connect("localhost", "root", "");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	if(mysqli_connect_errno()){
		echo "1. Veritabanına Bağlantı Sağlanamadı.<br />";
		echo "Hata : " . mysqli_connect_error() . "<br />";
	}else{
		echo "1. Veritabanına Bağlantı Kuruldu.<br />";
	}
	
	$SorguBir	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM bookstore.baby_names");
	$SorguIki	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM filme.filme");
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>