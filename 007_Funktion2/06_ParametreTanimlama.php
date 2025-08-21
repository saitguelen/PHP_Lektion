<!DOCTYPE html>
<html lang="en,de,tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    function IsimYaz($Isim, $Soyisim){
        echo $Isim. " ". $Soyisim."<br />";
    }
    IsimYaz("Sait", "Gülen");
    IsimYaz("Nesibe", "Gülen");

    echo "<br />";
    echo "<br />";
    echo "<hr />";
    function IslemYap($Isim, $Soyisim, $DogumTarihi, $Yas, $Sehir, $Meslek, $Cinsiyet="Erkek"){
		$GelenIsim				=	$Isim;
		$GelenSoyisim			=	$Soyisim;
		$GelenDogumTarihi		=	$DogumTarihi;
		$GelenYas				=	$Yas;
		$GelenSehir				=	$Sehir;
		$GelenMeslek			=	$Meslek;
		$GelenCinsiyet			=	$Cinsiyet;
		
		$KisiKarti		=	"Adı : " . $GelenIsim . "<br />" . "Soyadi : " . $GelenSoyisim . "<br />" . "Doğum Tarihi : " . $GelenDogumTarihi . "<br />" . "Yaşı : " . $GelenYas . "<br />" . "Yaşadığı Şehir : " . $GelenSehir . "<br />" . "Cinsiyet : " . $Cinsiyet;
		
		echo $KisiKarti;
	}
	
	IslemYap("Volkan", "Alakent", "08.12.1980", 38, "İstanbul", "Bilgisayar programlama ve yazılım geliştirme uzmanı", "Erkek");
	
	echo "<br /><br />";
    echo "<hr />";
	
	IslemYap("Onur", "Tatlı", "08.01.1983", 35, "İstanbul", "Supervisor", );
	
	echo "<br /><br />";
	echo "<hr />";
	IslemYap("Banu", "Alakent", "23.12.1984", 34, "Trabzon", "Finans Müdür", "Kadın");
    echo "<br />";
    echo "<br />";
    echo "<hr />";
    echo "<p> Fonksiyonlarin icine varsayilan parametre degeride yazabiliriz.<br>
    Yukaridaki fonksiyona cinsiyet olarak varsayilan deger olarak 'Erkek' yazdik, <br>
    eger kisi cinsiyet yazmazsa varsayilan deger olarak 'Erkek' yazilir..<br />";
    echo "<br />";
    echo "<br />";
    echo "<hr />";

    
	function Islem($Isim="Volkan", $Soyisim="Alakent", $Yas="38"){
		
		$GelenIsimDegeri	=	$Isim;
			echo "Gelen İsim : " . $GelenIsimDegeri . "<br />";
		$GelenSoyisimDegeri	=	$Soyisim;
			echo "Gelen Soyisim : " . $GelenSoyisimDegeri . "<br />";
		$GelenYasDegeri		=	$Yas;
			echo "Gelen Yaş : " . $GelenYasDegeri;
	}
	
	Islem();

    ?>
    
</body>
</html>