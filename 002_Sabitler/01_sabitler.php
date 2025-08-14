<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP Sabitler</title>
</head>

<body>
	<?php
	/*
	Sabit		:	Girdiğimiz değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
	Kurallar	:
	1. Sabitler ve içerikleri define() fonksiyonu ile veya const tanımı ile oluşturulur.
	2. Sabit isimleri mutlaka bir harf veya  _ (alt çizgi) ile başlamalıdır.
	3. Sabit isimleri hiçbir zaman bir rakam ile başlayamaz.
	4. Sabit isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
	5. Sabit isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
	6. Sabit isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Sabit isimleri büyük harf / küçük harf duyarlıdır. Eğer istenecek olur ise harf duyarlılığı iptal edilebilir.
	8. Sabit isimleri birden fazla kez kullanılamaz.
	9. Sabitlere atanacak olan değerler daha sonradan değiştirilemez veya tanımsız duruma getirilemez.
	10. Sabitler kapsama / etki alanı kurallarına tabi değildir ve her alandan erişilebilir.
	*/
	
	const ISIM	=	"Volkan Alakent";
	echo ISIM;
	echo "<br>";
	echo "<hr>";

    define("_ISIM1", "Volkan Alakent");
	echo _ISIM1;
	echo "<br>";
	echo "<hr>";


    const _ISIM2	=	"Volkan Alakent";
	echo _ISIM2;
	echo "<br>";
	echo "<hr>";


    //define("0ISIM", "Volkan Alakent"); // HATA, Sabitler hiçbir zaman bir rakam ile başlayamaz.
	//echo 0ISIM;

    define("I_S_I_M_111", "Volkan Alakent");
	echo I_S_I_M_111;
	echo "<br>";
	echo "<hr>";

	const I_S_I_M_111	=	"Volkan Alakent";
	echo I_S_I_M_111;
	echo "<br>";
	echo "<hr>";

	// define("IS IM", "Volkan Alakent"); // HATA, Sabit isimleri içerisinde boşluk kullanılamaz.
	// echo IS_IM;
	echo "<br>";
	echo "<hr>";

	// const IS IM	=	"Volkan Alakent"; // HATA, Sabit isimleri içerisinde boşluk kullanılamaz.
	// echo IS IM;
	echo "<br>";
	echo "<hr>";

	// define("DeNEme", "Volkan Alakent", TRUE);
	// echo DENEME;
	// echo "<br>";
	// echo "<hr>";

	//10. Sabitler kapsama / etki alanı kurallarına tabi değildir ve her alandan erişilebilir.
	
	function Deneme(){
		define("ISIM10", "Volkan Alakent");
	}
	
	Deneme();

	echo ISIM10;

	// function Deneme(){
	// 	const ISIM	=	"Volkan Alakent"; // HATA, define() ile sabit local alanda tanımlanacak olur ise çalışır, fakat const ile sabit local alanda tanımlanacak olur ise çalışmaz.
	// }
	
	// Deneme();
	
	// echo ISIM;

	echo "<br>";
	echo "<hr>";

	// define("ISIM11", "Volkan Alakent");
	
	// function Deneme(){
	// 	echo ISIM11;
	// }
	
	//  Deneme();

	//Sabit define globalde olusturduk lokal alanda kullanamiyoruz.

	//ama globalde const ile olusturursak ve lokalde cagirirsak calisir mesela asagidaki gibi

	const ISIM12 = "Volkan Alakent";

	function Deneme2(){
		echo ISIM12;
	}

	Deneme2();

	?>
</body>
</html>