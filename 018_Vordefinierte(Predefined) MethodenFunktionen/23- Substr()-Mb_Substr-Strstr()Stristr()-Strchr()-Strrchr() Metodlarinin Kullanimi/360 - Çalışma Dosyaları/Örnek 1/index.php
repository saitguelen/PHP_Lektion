<!doctype html>
<html lang="tr-TR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Extra Eğitim</title>
</head>

<body>
	<p>
	<pre>
				/*
	substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre istenilen değeri bularak, bulduğu değeri geriye döndürür.
	mb_substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak istenilen değeri bularak, bulduğu değeri geriye döndürür.
	strstr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	stristr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	strchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	strrchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, son eşleşen değerin sonrasını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Icerik		=	"Sait Gülen";
	
	echo $Icerik . "<br />";
	<ol>
	<li><$Sonuc		=	substr($Icerik, 5);//% den baslayarak devamini alir</li>
	
	echo $Sonuc;

	<li>$Sonuc		=	substr($Icerik, 7, 3);  // 7. karakterden basla 3 karakter alir</li>

	<li>$Sonuc		=	substr($Icerik, 15, 6); // Dikkat substr diğer string metodlarında olduğu gibi türkçe karakterleri 2 karakter olarak değerlendirir.</li>
	<li>$Sonuc		=	mb_substr($Icerik, 15, 6); // türkce karakterleride tek karakter olarak sayar</li>



	</ol>
		</pre>
	</p>
	<hr>
	<br>
	<?php
	/*
	substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre istenilen değeri bularak, bulduğu değeri geriye döndürür.
	mb_substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak istenilen değeri bularak, bulduğu değeri geriye döndürür.
	strstr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	stristr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	strchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	strrchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, son eşleşen değerin sonrasını bularak, bulduğu değeri geriye döndürür.
	*/

	$Icerik		=	"Sait Gülen";

	echo $Icerik . "<br />";

	$Sonuc		=	substr($Icerik, 5); //% den baslayarak devamini alir

	echo $Sonuc;

	?>
</body>

</html>