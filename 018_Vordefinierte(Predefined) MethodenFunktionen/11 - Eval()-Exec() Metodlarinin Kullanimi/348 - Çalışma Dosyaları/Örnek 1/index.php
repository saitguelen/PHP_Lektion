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
	eval()		:	Belirtilecek olan içeriğin, PHP kodu olarak algılanmasını sağlar ve kodu çalıştırarak, oluşan değeri geriye döndürür.
	exec()		:	PHP dosyası dahilinde belirtilecek olan komutu çalıştırır ve işlem sonucunda bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Metin	=	'echo "Sait Gülen";';
	
	eval($Metin);
	
		</pre>
	</p>
	<hr>
	<br>
	
	<?php
	/*
	eval()		:	Belirtilecek olan içeriğin, PHP kodu olarak algılanmasını sağlar ve kodu çalıştırarak, oluşan değeri geriye döndürür.
	exec()		:	PHP dosyası dahilinde belirtilecek olan komutu çalıştırır ve işlem sonucunda bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Metin	=	'echo "Sait Gülen";';
	
	eval($Metin);
	
	?>
</body>
</html>