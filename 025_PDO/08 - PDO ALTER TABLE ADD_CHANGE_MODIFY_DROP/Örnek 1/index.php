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
	ALTER TABLE				:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun ekleneceğini, herhangi bir sütunun silineceğini veya herhangi bir sütunun adının yada yapısının değiştirileceğini belirtmek için kullanılır.
	ADD / ADD COLUMN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklemek için kullanılır.
		FIRST 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, diğer tüm sütunların en başına eklenmesi gerektiğini belirtmek için kullanılır.
		AFTER 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, belirtilecek olan sütundan bir sonra eklenmesi gerektiğini belirtmek için kullanılır.
	CHANGE / CHANGE COLUMN	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun adını yada yapısını değiştirmek için kullanılır.
	MODIFY / MODIFY COLUMN	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun yapısını değiştirmek için kullanılır.
	DROP / DROP COLUMN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunu silmek için kullanılır.
	*/
	
	try{
		$Database = new PDO("mysql:host=localhost;dbname=extraegitim;charset UTF8","root","");
		echo "Database baglantisi saglandi.. <br />";

	}catch(PDOException $HataDegeri){
		echo "Baglanti hatasi oldu!<br />";
		echo "Hata Degeri: ". $HataDegeri->getMessage()."<br />";
		die();


	}
	$Sorgu = $Database->query("ALTER TABLE uyeler
	ADD dogumtarihi smallint(5) NOT NULL ,
	ADD sitemizineredenduydunuz varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
	if($Sorgu){
		echo "Tabloya yeni degerler eklendi!<br />";

	}else{
		echo "Sorgu Hatasi!!<br />";

	}
	$Database = null;
	?>
</body>
</html>