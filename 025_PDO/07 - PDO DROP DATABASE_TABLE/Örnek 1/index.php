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
	DROP DATABASE	:	MySQL sunucusu içerisinde bulunan herhangi bir database'i silmek için kullanılır.
	DROP TABLE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloyu silmek için kullanılır.
	*/
	try{

		$Database  = new PDO("mysql:host=localhost;charset UTF8", "root","");
		echo "Veri baglantisi kuruldu<br />";

	}catch(PDOException $HataDegeri){
		echo "Hata Olustu..<br />";
		echo "Hata Degeri: ". $HataDegeri->getMessage(). "<br /> ";


	}

	$Sorgu = $Database->query("DROP DATABASE test");
	if($Sorgu){

		echo "Database silindi..<br />";

	}else{
		echo "Sorgu Hatasi..<br />";

	}
	$Database =null;
	?>
</body>
</html>