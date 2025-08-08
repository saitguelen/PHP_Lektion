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
	Değişken	:	Girdiğimiz değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
	Kurallar	:
	1. Değişkenler daima $ (Dolar) işareti ile başlar.
	2. Değişken isimleri mutlaka bir harf veya  _ (alt çizgi) ile başlamalıdır.
	3. Değişken isimleri hiçbir zaman bir rakam ile başlayamaz.
	4. Değişken isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
	5. Değişken isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
	6. Değişken isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Değişken isimleri büyük harf / küçük harf duyarlıdır.
	8. Değişken isimleri birden fazla kez kullanılabilir. Fakat değişken isiminin tekrar edilmesi durumunda, daima son değişkenin değeri gerçek değer olarak kabul edilecektir.
	9. Değişkenler kapsama / etki alanı kurallarına tabidir.
	*/

    // $De ger	=	"Volkan Alakent"; // HATA, Çünkü değişken ismi içerisinde boşluk kullanıldı.
    // echo $De ger;
    $_Deger = "Volkan Alakent"; // Doğru kullanım, değişken ismi içerisinde boşluk kullanılmadı.
    echo $_Deger; // Doğru kullanım, değişken ismi içerisinde boşluk kullanılmadı.
    echo "<br>";

    $deger = "Volkan Alakent"; // Doğru kullanım, değişken ismi içerisinde boşluk kullanılmadı.
    echo $deger;
    echo "<br>";

    // $1Deger= "Volkan Alakent"; // HATA, Çünkü değişken ismi 1 ile başlatılamaz.
    //echo $1Deger; // HATA, Çünkü değişken ismi 1 ile başlatılamaz.  

    echo "<br>";
    $Deger1 = "Volkan Alakent"; // Doğru kullanım, değişken ismi 1 ile bitirilebilir.
    echo $Deger1; // Doğru kullanım, değişken ismi 1 ile bitirilebilir. 
    echo "<br>";
    $deger_1 = "Volkan Alakent"; // Doğru kullanım, değişken ismi içerisinde alt çizgi kullanılabilir.
    echo $deger_1; // Doğru kullanım, değişken ismi içerisinde alt çizgi kullanılabilir.
    echo "<br>";
    //Özel karakter kullanilamaz.
    //$deger@ = "Volkan Alakent"; // HATA, Çünkü değişken ismi içerisinde özel karakter kullanıldı.
    //echo $deger@; // HATA, Çünkü değişken ismi içerisinde özel karakter kullanıldı.   

    //degisken ismi olarak if, class, function, while, for, foreach, switch, case, default, break, continue, 
    //return, echo, print gibi kelimeler kullanilamaz.
    //if = "Volkan Alakent"; // HATA, Çünkü değişken ismi olarak PHP tarafından kullanılan bir kelime kullanıldı.
    //echo $if; // HATA, Çünkü değişken ismi olarak PHP tarafından kullanılan bir kelime kullanıldı.    
    $if_ = "Volkan Alakent"; // Doğru kullanım, değişken ismi olarak PHP tarafından kullanılan bir kelime kullanıldı fakat sonuna alt çizgi eklendi.
    echo $if_;
    echo "<br>";
    $IF = "Volkan Alakent"; // Doğru kullanım, değişken ismi büyük harfle başlatıldı.
    echo $IF;
    echo "<br>";


    ?>
    <p>
    <pre>/*
	Değişken	:	Girdiğimiz değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
	Kurallar	:
	1. Değişkenler daima $ (Dolar) işareti ile başlar.
	2. Değişken isimleri mutlaka bir harf veya  _ (alt çizgi) ile başlamalıdır.
	3. Değişken isimleri hiçbir zaman bir rakam ile başlayamaz.
	4. Değişken isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
	5. Değişken isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
	6. Değişken isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Değişken isimleri büyük harf / küçük harf duyarlıdır.
	8. Değişken isimleri birden fazla kez kullanılabilir. Fakat değişken isiminin tekrar edilmesi durumunda, daima son değişkenin değeri gerçek değer olarak kabul edilecektir.
	9. Değişkenler kapsama / etki alanı kurallarına tabidir.

    / $De ger	=	"Volkan Alakent"; // HATA, Çünkü değişken ismi içerisinde boşluk kullanıldı.
	// echo $De ger;
    $_Deger = "Volkan Alakent"; // Doğru kullanım, değişken ismi içerisinde boşluk kullanılmadı.
    echo $_Deger; // Doğru kullanım, değişken ismi içerisinde boşluk kullanılmadı.
    echo "<br>";

    $deger = "Volkan Alakent"; // Doğru kullanım, değişken ismi içerisinde boşluk kullanılmadı.
    echo $deger;   
    echo "<br>";

    $1Deger= "Volkan Alakent"; // HATA, Çünkü değişken ismi 1 ile başlatılamaz.
    echo $1Deger; // HATA, Çünkü değişken ismi 1 ile başlatılamaz.  

    echo "<br>";
    $Deger1 = "Volkan Alakent"; // Doğru kullanım, değişken ismi 1 ile bitirilebilir.
    echo $Deger1; // Doğru kullanım, değişken ismi 1 ile bitirilebilir. 
    echo "<br>"; 
    $deger_1 = "Volkan Alakent"; // Doğru kullanım, değişken ismi içerisinde alt çizgi kullanılabilir.
    echo $deger_1; // Doğru kullanım, değişken ismi içerisinde alt çizgi kullanılabilir.
    echo "<br>";
    //Özel karakter kullanilamaz.
    //$deger@ = "Volkan Alakent"; // HATA, Çünkü değişken ismi içerisinde özel karakter kullanıldı.
    //echo $deger@; // HATA, Çünkü değişken ismi içerisinde özel karakter kullanıldı.   

    //degisken ismi olarak if, class, function, while, for, foreach, switch, case, default, break, continue, 
    //return, echo, print gibi kelimeler kullanilamaz.
    //if = "Volkan Alakent"; // HATA, Çünkü değişken ismi olarak PHP tarafından kullanılan bir kelime kullanıldı.
    //echo $if; // HATA, Çünkü değişken ismi olarak PHP tarafından kullanılan bir kelime kullanıldı.    
    $if_ = "Volkan Alakent"; // Doğru kullanım, değişken ismi olarak PHP tarafından kullanılan bir kelime kullanıldı fakat sonuna alt çizgi eklendi.
    echo $if_;
    echo "<br>";
    $IF = "Volkan Alakent"; // Doğru kullanım, değişken ismi büyük harfle başlatıldı.
    echo $IF;
    echo "<br>";
	*/</pre>
    </p>
</body>

</html>