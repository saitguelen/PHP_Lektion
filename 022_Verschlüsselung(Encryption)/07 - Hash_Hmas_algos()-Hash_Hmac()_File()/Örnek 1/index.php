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
	
	$Degerler	=	hash_hmac_algos();
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	/*
	hmac yöntemi ile hash üretilen algoritmalar:
	Array
(
    [0] => md2
    [1] => md4
    [2] => md5
    [3] => sha1
    [4] => sha224
    [5] => sha256
    [6] => sha384
    [7] => sha512/224
    [8] => sha512/256
    [9] => sha512
    [10] => sha3-224
    [11] => sha3-256
    [12] => sha3-384
    [13] => sha3-512
    [14] => ripemd128
    [15] => ripemd160
    [16] => ripemd256
    [17] => ripemd320
    [18] => whirlpool
    [19] => tiger128,3
    [20] => tiger160,3
    [21] => tiger192,3
    [22] => tiger128,4
    [23] => tiger160,4
    [24] => tiger192,4
    [25] => snefru
    [26] => snefru256
    [27] => gost
    [28] => gost-crypto
    [29] => haval128,3
    [30] => haval160,3
    [31] => haval192,3
    [32] => haval224,3
    [33] => haval256,3
    [34] => haval128,4
    [35] => haval160,4
    [36] => haval192,4
    [37] => haval224,4
    [38] => haval256,4
    [39] => haval128,5
    [40] => haval160,5
    [41] => haval192,5
    [42] => haval224,5
    [43] => haval256,5
)
	 */
	?>
</body>
</html>