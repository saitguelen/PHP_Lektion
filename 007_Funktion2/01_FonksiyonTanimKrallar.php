<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Funktion</title>
</head>

<body>
    <h1>Fonksiyonlar</h1>
    <p>Fonksiyonlar, belirli bir görevi yerine getirmek için bir araya getirilmiş kod bloklarıdır.</p>
    <p>Fonksiyon	:	Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan 
    küçük program parçacıklarına verilen isimdir.   </p>
    <h2>Kurallar</h2>
    <ul>
        <li>Fonksiyon isimleri her zaman anlamlı olarak kullanılmalıdır.</li>
        <li>mutlaka bir harf veya alt çizgi ile başlamalıdır.   </li>
        <li>hiçbir zaman bir rakam ile başlayamaz.</li>
        <li>içerisinde hiçbir zaman boşluk, türkçe karkaterler ve özel karakterler kullanılamaz.</li>

    </ul>
    <p>
        <pre>
            	Kurallar	:
	1. Fonksiyon isimleri her zaman anlamlı olarak kullanılmalıdır.
	2. Fonksiyon isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
	3. Fonksiyon isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
	4. Fonksiyon isimleri hiçbir zaman bir rakam ile başlayamaz.
	5. Fonksiyon isimleri içerisinde hiçbir zaman boşluk, türkçe karkaterler ve özel karakterler kullanılamaz.
	6. Fonksiyon isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Fonksiyon isimleri hiçbir zaman birden fazla kez kullanılamaz.
	8. Fonksiyon isimleri küçük harf / büyük harf duyarlı değildir.
	9. Fonksiyonlar kapsama / etki alanı kurallarına tabidir.
	
	Yapısı		:
	function İsim(Paramtere veya Parametreler){
		Kod blokları
	}
	*/
        </pre>
    </p>
	<?php
	/*
	Fonksiyon	:	Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan 
    küçük program parçacıklarına verilen isimdir.
	
	Kurallar	:
	1. Fonksiyon isimleri her zaman anlamlı olarak kullanılmalıdır.
	2. Fonksiyon isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
	3. Fonksiyon isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
	4. Fonksiyon isimleri hiçbir zaman bir rakam ile başlayamaz.
	5. Fonksiyon isimleri içerisinde hiçbir zaman boşluk, türkçe karkaterler ve özel karakterler kullanılamaz.
	6. Fonksiyon isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Fonksiyon isimleri hiçbir zaman birden fazla kez kullanılamaz.
	8. Fonksiyon isimleri küçük harf / büyük harf duyarlı değildir.
	9. Fonksiyonlar kapsama / etki alanı kurallarına tabidir.
	
	Yapısı		:
	function İsim(Paramtere veya Parametreler){
		Kod blokları
	}
	*/
	
	$Deger	=	12;
	
	function YaziYaz(){
		echo "Extra Eğitim - Volkan Alakent"; 
	}
	
	YaziYaz();
    echo "<br />";
    echo "<hr />";

    function IslemYap(){
        global $Deger; // Global değişkeni fonksiyon içerisinde kullanabilmek için global anahtar kelimesini kullanıyoruz.
        $Deger2=25;
        $Sonuc=$Deger+$Deger2;
        echo $Sonuc;
    }
    IslemYap();
    echo "<br />";
    echo "<hr />";

    function Islem($Deger3){
        global $Deger;
        
        $Sonuc2=$Deger3-$Deger;
        return $Sonuc2;


    }
    echo Islem(105.2);
	?>
</body>
</html>