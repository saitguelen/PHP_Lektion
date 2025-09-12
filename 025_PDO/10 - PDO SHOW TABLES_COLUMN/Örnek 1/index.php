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
	

	try{
		$Database = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
		echo "Baglanti kuruldu.<br>";

	}catch(PDOException $HataDegeri){
		echo "Baglanti hatasi.. <br/>";
		echo "Hata Degeri:  ". $HataDegeri->getMessage(). "<br />";
		die();

	}

	$Sorgu = $Database->query("SHOW TABLES");
		if($Sorgu) {
			foreach($Sorgu as $Tablolar){
				echo "<pre>";
				print_r($Tablolar);
				echo "</pre>";
			}

		}else{
			echo "Sorgu Hatasi...<br>";
		}
	




	$Database = null;
	?>
</body>
</html>