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
	__LINE__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu satırın, satır numarası bilgisi değerini döndürür.
	*/
	
	$SatirNumarasi	=	__LINE__;
	echo "__LINE__  satir numarasini verir.";
	echo "<br />";
	echo "İlgili Kodun Bulunduğu Satır Numarası : " . $SatirNumarasi;
	echo "<br />";

    	/*
	__DIR__	:	Çalışmakta olan PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyasının bulunduğu dizin bilgisi değerini döndürür. PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası adını içermez.
	*/
	
	$Dizin	=	__DIR__;
	echo "__DIR__  dizin bilgisini verir.";	
	echo "<br />";
	echo $Dizin;
	echo "<br />";

		/*
	__FILE__	:	Çalışmakta olan PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyasının bulunduğu dizin ve dosya adı bilgisi değerini döndürür.
	*/
	
	$TamDosyaYolu	=	__FILE__;
	echo "__FILE__  dosya bilgisini verir.";
	echo "<br />";
	echo $TamDosyaYolu;

	echo "<br />";

	/*
	__FUNCTION__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu fonksiyonun, fonksiyon adı bilgisi değerini döndürür.
	*/
	echo "__FUNCTION__  fonksiyon bilgisini verir.";
	echo "<br />";
	function Deger(){
		$Sonuc	=	__FUNCTION__;
		echo $Sonuc;
	}
	Deger();

	echo "<br />";

	/*
	__CLASS__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıfın, sınıf adı bilgisi değerini döndürür.
	*/
	echo "__CLASS__  sınıf bilgisini verir.";
	echo "<br />";

	class Deger{
		function Deneme(){
			$Sonuc	=	__CLASS__;;
			echo $Sonuc;
		}
	}
	
	$Islem	=	new Deger;
	$Islem->Deneme();

	echo "<br />";

	/*
	__METHOD__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan metodun, metot adı bilgisi değerini döndürür.
	*/
	

	echo "__METHOD__  metot bilgisini verir.";
	echo "<br />";
	class ExtraEgitim{
		
		function Ornek1(){
			$Isim1	=	__METHOD__;
			echo $Isim1;
		}
		
		function Ornek2(){
			$Isim2	=	__METHOD__;
			echo $Isim2;
		}
		
	}
	
	$Islem	=	new ExtraEgitim;
	$Islem->Ornek1();
	echo "<br />";
	$Islem->Ornek2();
	
	echo "<br />";
	/*
	__TRAIT__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan özelliğin, özellik adı bilgisi değerini döndürür.
	*/
	echo "__TRAIT__  özellik bilgisini verir.";
	echo "<br />";
	trait OzellikBir{
		function YazBir(){
			$Deger1	=	__TRAIT__;
			echo $Deger1;
		}
	}
	
	trait OzellikIki{
		function YazIki(){
			$Deger2	=	__TRAIT__;
			echo $Deger2;
		}
	}
	
	class ExtraEgitim2{
		use OzellikBir;
		use OzellikIki;
	}
	
	$Islem	=	new ExtraEgitim2;
	$Islem->YazBir();
	echo "<br />";
	$Islem->YazIki();

	echo "<br />";

		/*
	__NAMESPACE__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde tanımlanmış olan namespace’ın (isim uzayının), namespace (isim uzayı) adı bilgisi değerini döndürür.
	*/
	echo "<br />";	
	echo "__NAMESPACE__  isim uzayi bilgisini verir.";
	echo "<br />";
	$Sonuc	=	 __NAMESPACE__;
	echo $Sonuc;
	echo "<br />";
	
	?>
</body>
</html>