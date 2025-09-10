<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php


	$Database  = mysqli_connect("localhost", "root", "", "eis_db");
	mysqli_set_charset($Database, "UTF8");

	if (mysqli_connect_errno()) {

		echo "1. Veritabanina baglanti saglanmadi.<br>";
		echo "Hata: " . mysqli_connect_error() . "<br>";
	} else {
		echo "1. Veritabanina baglanti saglandi". "<br>";
	}

	$Database2  = mysqli_connect("localhost", "root", "", "filme");
	mysqli_set_charset($Database, "UTF8");

	if (mysqli_connect_errno()) {

		echo "2. Veritabanina baglanti saglanmadi.<br>";
		echo "Hata: " . mysqli_connect_error() . "<br>";
	} else {
		echo "2. Veritabanina baglanti saglandi";
	}

	mysqli_close($Database);
	mysqli_close($Database2);



	?>

</body>

</html>