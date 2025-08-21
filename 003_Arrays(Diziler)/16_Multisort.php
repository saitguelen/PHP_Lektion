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
	array_multisort()	:	Bir veya birden fazla dizinin elemanlarını gelişmiş olarak çok yönlü sıralamak için kullanılır.
	SORT_ASC			:	A'dan Z'ye / Küçükten büyüğe
	SORT_DESC			:	Z'den A'ya / Büyükten küçüğe
	SORT_REGULAR		:	Standart sıralama (Varsayılan)
	SORT_NUMERIC		:	Rakamsal sıralama
	SORT_STRING			:	Alfanumerik sıralama (String)
	SORT_NATURAL		:	Alfanumerik sıralama (String) (Doğal)
	*/
	
	$Degerler	=	array(88, 12, 47, 23, 95, 5, 34);
	
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";

    array_multisort($Degerler, SORT_ASC);
    echo "<p> SORT_ASC </p>";
    echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";


	
	array_multisort($Degerler, SORT_DESC);
	echo "<p> SORT_DESC </p>";
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";

    array_multisort($Degerler, SORT_REGULAR);
    echo "<p> SORT_REGULAR </p>";
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";

    array_multisort($Degerler, SORT_NUMERIC);
    echo "<p> SORT_NUMERIC </p>";
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";

    array_multisort($Degerler, SORT_STRING);
    echo "<p> SORT_STRING </p>";
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";

    array_multisort($Degerler, SORT_NATURAL);
    echo "<p> SORT_NATURAL </p>";
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";

	?>
</body>
</html>