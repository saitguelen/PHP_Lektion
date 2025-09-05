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
	hash_hmac_algos()	:	PHP yazılımı içerisinde anahtarlı olarak HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) yöntemi ile kullanılabilecek olan sisteme tanımlı tüm algoritmaların listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	hash_hmac()			:	Belirtilecek olan içeriğin HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) yöntemi ile hash özetini üreterek, ürettiği değeri geriye döndürür.
	hash_hmac_file()	:	Belirtilecek olan dosyanın HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) yöntemi ile hash özetini üreterek, ürettiği değeri geriye döndürür.
	*/
	
	$Icerik		=	"Extra Eğitim - Sait Gülen";
	$Anahtar	=	"GizliBirDeger";
	
	
	echo "Orjinal içerik : " . $Icerik . "<br />";
	
	$UretBir	=	hash_hmac("md5", $Icerik, $Anahtar);
	echo "md5 algoritması kullanılarak üretilmiş hash : " . $UretBir . "<br />". "<br />";
	
	$UretIki	=	hash_hmac("sha1", $Icerik, $Anahtar);
	echo "sha1 algoritması kullanılarak üretilmiş hash : " . $UretIki . "<br />". "<br />";
	
	$UretUc		=	hash_hmac("snefru256", $Icerik, $Anahtar);
	echo "snefru256 algoritması kullanılarak üretilmiş hash : " . $UretUc . "<br />". "<br />";
	
	$UretDort	=	hash_hmac("ripemd320", $Icerik, $Anahtar);
	echo "ripemd320 algoritması kullanılarak üretilmiş hash : " . $UretDort . "<br />". "<br />";

	$UretAlti	=	hash_hmac("gost", $Icerik, $Anahtar);
	echo "gost algoritması kullanılarak üretilmiş hash : " . $UretAlti . "<br />". "<br />";

	$UretYedi	=	hash_hmac("haval224,4", $Icerik, $Anahtar);
	echo "haval224,4algoritması kullanılarak üretilmiş hash : " . $UretYedi . "<br />". "<br />";

	$UretSekiz	=	hash_hmac("whirlpool", $Icerik, $Anahtar);
	echo "whirlpool algoritması kullanılarak üretilmiş hash : " . $UretSekiz . "<br />". "<br />";

	$UretDokuz	=	hash_hmac_file("sha3-384", "Oku.txt", $Anahtar);//Dosyada yapabiliriz...
	echo "sha3-384 algoritması kullanılarak üretilmiş hash Oku Dosyasi: " . $UretDokuz . "<br />". "<br />";
	
	$UretBes	=	hash_hmac("sha3-512", $Icerik, $Anahtar);
	echo "sha3-512 algoritması kullanılarak üretilmiş hash : " . $UretBes;
	
	?>
</body>
</html>