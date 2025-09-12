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
	SHOW TABLES		:	MySQL sunucusundaki database içerisinde bulunan tüm tabloların listesini bulmak için kullanılır.
	SHOW COLUMNS	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm sütunlarının listesini bulmak için kullanılır.
	*/

	try {
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;charset=UTF8", "root", "");
		echo "Bağlantı Kuruldu.<br />";
	} catch (PDOException $HataDegeri) {
		echo "Bağlantı Hatası.<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}

	$Sorgu		=	$VeritabaniBaglantisi->query("SHOW TABLES FROM extraegitim");
	if ($Sorgu) {
		echo "Database İçerisinde Bulunan Tüm Tablolar :<br />";
		foreach ($Sorgu as $Tablolar) {
			echo $Tablolar[0] . "<br />";
		}
	} else {
		echo "Sorgu Hatası.";
	}
	echo "<hr />";
	$Sorgu2		=	$VeritabaniBaglantisi->query("SHOW TABLES FROM bookstore");
	if ($Sorgu2) {
		echo "Database İçerisinde Bulunan Tüm Tablolar :<br />";
		foreach ($Sorgu2 as $Tablolar2) {
			echo $Tablolar2[0] . "<br />";
		}
	} else {
		echo "Sorgu Hatası.";
	}

	$VeritabaniBaglantisi	=	null;

	?>
</body>

</html>