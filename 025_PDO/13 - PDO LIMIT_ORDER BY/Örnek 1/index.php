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
	LIMIT 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek için kullanılır.
	ORDER BY	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra veya sıralar dahilinde erişilmek istenildiğini belirtmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=bookstore;charset=UTF8", "root", "");
	}catch(PDOException $HataBilgisi){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . $HataBilgisi->getMessage();
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM baby_names LIMIT 15 ", PDO::FETCH_ASSOC);
		if($Sorgu){
			foreach($Sorgu as $Satirlar){
				echo $Satirlar["id"] . " | " . $Satirlar["name"] . " | " . $Satirlar["year"] . " | " . $Satirlar["gender"] . " | " . $Satirlar["count"] . "<br /><br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>