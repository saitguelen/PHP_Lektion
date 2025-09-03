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
	wordwrap()	:	Belirtilecek olan içeriğe, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan değer / değerleri ekleyerek, eklenmiş olan değeri geriye döndürür.
	str_pad()	:	Belirtilecek olan içeriğin, belirtilecek olan değer / değerler doğrultusunda, başına, sonuna veya hem başına hemde sonuna değer ekleyerek, eklenmiş olan değeri geriye döndürür.
		STR_PAD_LEFT	:	Belirtilecek olan içeriğin başına / soluna değer eklemek için kullanılır.
		STR_PAD_RIGHT	:	Belirtilecek olan içeriğin sonuna / sağına değer eklemek için kullanılır.
		STR_PAD_BOTH	:	Belirtilecek olan içeriğin hem başına / soluna, hemde sonuna / sağına değer eklemek için kullanılır.
	*/
	
	$Metin		=	"Sait Gülen PHP Görsel Eğitim Seti";
	$Islem		=	wordwrap($Metin, 12, "<br />"); //14. karakter kelime arasina gelirse bölmez kelimeyi tamamlar sonra alta gecer
	
	echo $Islem;

	echo "<br>";
	echo "<hr>";
	$Metin		=	"Sait Gülen PHP Görsel Eğitim Seti";
	$Islem1		=	wordwrap($Metin, 14, "<br />"); //14. karakter kelime arasina gelirse bölmez kelimeyi tamamlar sonra alta gecer
	
	echo $Islem1;
	
	?>
</body>
</html>