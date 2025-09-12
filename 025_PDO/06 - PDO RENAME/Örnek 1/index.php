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
	RENAME 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu içerisinden bulunduğu database'den başka bir database'e taşımak içinde kullanılır.
	*/
	
	try{
		$Database = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
		echo "Veribaglantisi saglandi<br />";

	}catch(PDOException $HataDegeri){
		echo "Baglanti hatasi<br />";
		echo "Hata Aciklamasi: ". $HataDegeri->getMessage();
		die();

	}
	$Sorgu = $Database->query("RENAME TABLE ornek TO ornektest");
		if($Sorgu){
			echo "Tablo adi degistirildi.<br />";

		}else{

			echo "Sorgu Hatasi olustu.<br />";

		}
	$Database = null;
	?>
</body>
</html>