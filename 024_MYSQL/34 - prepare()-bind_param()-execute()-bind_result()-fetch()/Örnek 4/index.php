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
	prepare()		:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre query (sorgu) hazırlamak için kullanılır.
	bind_param()	:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'yi (sorguyu) derlemek için kullanılır.
		i 			:	integer
		d 			:	double
		s 			:	string
		b 			:	blob
	execute()		:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'yi (sorguyu) çalıştırmak için kullanılır.
	bind_result()	:	MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış ve execute() metodu kullanılarak çalıştırılmış olan query'nin (sorgunun) sonuçlarını almak için kullanılır.
	fetch()			:	MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve bind_result() metodu kullanılarak sonuçları alınmış olan query'nin (sorgunun) verilerini okumak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE id>?");
		if($Sorgu){
			$IdKosulu	=	15;
			echo "ID'si 15'den büyük degerler: <br /><br /><br />";
			$Sorgu->bind_param("i", $IdKosulu);//yukarida soru isareti yerine gelecek degeri bind_param ile atariz, i ile integer, degisken ile hangi id verdigimizi yaziyoruz
			$Sorgu->execute();
			$Sorgu->bind_result($KayitIdsi, $KayitIsimSoyisim, $KayitEmaili, $KayitSifresi, $KayitTelefonNumarasi, $KayitYasi, $KayitCinsiyeti, $KayitSehri);
			while($Sorgu->fetch()){
				echo $KayitIdsi . " | " . $KayitIsimSoyisim . " | " . $KayitEmaili . " | " . $KayitSifresi . " | " . $KayitTelefonNumarasi . " | " . $KayitYasi . " | " . $KayitCinsiyeti . " | " . $KayitSehri . " | "  . "<br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>