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
	ORDER BY	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra / sıralar dahilinde erişilmek istenildiğini belirtmek için kullanılır.
	*/


	$Database = mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($Database, "UTF8");

	if (mysqli_connect_errno()) {
		echo "Baglanti hatasi. <br /> ";
		echo "Hata Degeri: " . mysqli_connect_error() . "<br />";
		die();
	}
	$Query = mysqli_query($Database, "SELECT * FROM kisiler LIMIT 2"); //2 tane deger getirir.LIMIT olmazsa hepsini getirir.
	if ($Query) {
		while ($Kayitlar = mysqli_fetch_assoc($Query)) {  //sütün isimleri ile cagirdik
			echo "ID Degeri :" . $Kayitlar["id"] . "<br />";
			echo "Isim Degeri :" . $Kayitlar["isim"] . "<br />";
			echo "Yas Degeri :" . $Kayitlar["yas"] . "<br />";
			echo "Beceri Degeri :" . $Kayitlar["beceriler"] . "<br />";
			echo "Beceri Seviyesi Degeri :" . $Kayitlar["beceriseviyeleri"] . "<br />" . "<hr>";
		}
	}else{
		echo "Sorgu hatasi. <br />";
	}

	mysqli_close($Database);
	?>
</body>

</html>