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
	defined()	:	Belirtilecek olan sabitin varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	isset()		:	Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	empty()		:	Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın daha önceden tanımlanmamış olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	$Isim		=	"Volkan Alakent";
	
	$Kontrol	=	empty($Isim);
	
	if($Kontrol==true){
		echo 'Isim adında değişken bulunmamaktadır.'; //yani burada yok mu diye soruyoruz, isim adinda br degisken yok mu? diyoruz.true gelirse evet yok diyip bu satiri yazacak
	}else{
		echo 'Isim adında değişken bulunmaktadır.';
	}
	
	?>
</body>
</html>