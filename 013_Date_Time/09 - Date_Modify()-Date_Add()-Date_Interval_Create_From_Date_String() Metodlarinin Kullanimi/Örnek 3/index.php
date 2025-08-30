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
	date_modify()							:	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan tarih değerini eklemek için kullanılır.
	date_add()								:	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan tarih değerini eklemek için kullanılır.
	date_interval_create_from_date_string()	:	date_add() metodu ile tarih değeri ekleme işlemlerinde, eklenecek olan değeri tanımlayabilmek için kullanılır.
	*/
	
	$Zaman			=	date_create("1980-12-08"); // Yıl-Ay-Gün
	$Zaman1			=date_create();
	
	echo "<pre>";
	print_r($Zaman);
	echo "<pre>";
	
	date_modify($Zaman, "+1 year");
	date_modify($Zaman, "+2 month");
	date_modify($Zaman, "+3 day");
	date_modify($Zaman, "+12 hour");
	date_modify($Zaman, "+45 minute");
	date_modify($Zaman, "+5 second");
	
	echo "<pre>";
	print_r($Zaman);
	echo "<pre>";
	echo "<hr>";
	echo "<pre>";
	print_r($Zaman1);
	echo "<pre>";
	echo $Zaman1->format("Y")." Year <br/>";
	echo $Zaman1->format("m")." Monath <br/>";
	echo $Zaman1->format("d")." Day <br/>";
	echo $Zaman1->format("H")." Hour <br/>";
	echo $Zaman1->format("i")." Minute <br/>";
	echo $Zaman1->format("s")." Sekunde <br/>";
	echo $Zaman1->format("ms");
	?>
</body>
</html>