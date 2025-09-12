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
	WHERE 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece koşula bağlı verilerin işlemek istenildiğini belirtmek için kullanılır.
	*/
	

	try{
		$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=bookstore;charset=UTF8","root","");
		echo "Data baglantisi saglandi-- <br />";

	}catch(PDOException $HataMesaji){
		echo "Baglanti Hatasi oldu...<br />";
		echo "Hata Degeri: ". $HataMesaji->getMessage(). "<br />";
		die();


	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM baby_names WHERE count >=5000 ORDER BY count DESC LIMIT 45", PDO::FETCH_ASSOC);
		if($Sorgu){
			foreach($Sorgu as $Satirlar){
				echo $Satirlar["id"] . " | " . $Satirlar["name"] . " | " . $Satirlar["gender"] . " | " . $Satirlar["count"] . " | "  . "<br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>