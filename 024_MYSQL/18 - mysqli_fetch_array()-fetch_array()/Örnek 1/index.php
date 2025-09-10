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
	mysqli_fetch_array()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini düzenli bir dizi halinde okumak için kullanılır.
	fetch_array()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini düzenli bir dizi halinde okumak için kullanılır.
		MYSQLI_ASSOC 		:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
		MYSQLI_NUM	 		:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır ve ilgili verilere sütun sıra numaraları ile erişilir.
		MYSQLI_BOTH	 		:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
	*/


	$Database = mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($Database, "UTF8");

	if (mysqli_connect_errno()) {
		echo "Database Verbingung Fehler. <br />";
		echo "Fehler ist: " . mysqli_connect_error() . "<br/>";
		die();
	} else {
		$Query = mysqli_query($Database, "SELECT * FROM kisiler");

		if ($Query) {
			$Speiche = mysqli_fetch_array($Query);
			echo "<pre>";
			print_r($Speiche);
			echo "</pre>";
		}
	}
	$Query2 = mysqli_query($Database, "SELECT * FROM kisiler");

	if ($Query2) {
		while ($Speiche2 = mysqli_fetch_array($Query2)) {//Hier können wir auch die gesamte Schleife auflisten..
			echo "<pre>";
			print_r($Speiche2);
			echo "</pre>";
		}
	}
	mysqli_close($Database);

	?>
</body>

</html>