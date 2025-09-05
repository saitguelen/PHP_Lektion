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
	hash_init()		:	hash özeti üretme işlemlerini başlatmak ve algoritma türünü belirtmek için kullanılır.
	hash_update()	:	Belirtilecek olan içeriği, daha önceden hash özeti üretme işlemi başlatılmış bir işleme dahil etmek için kullanılır.
	hash_copy()		:	hash özeti üretme işlmelerini başlatmak ve algoritma türünü belirlemek için daha önceden oluşturulmuş olan hash_init() metodunu kopyalamak için kullanılır.
	hash_final()	:	Daha önceden hash özeti üretme işlemi başlatılarak içeriğide dahil edilmiş bir işlemin hash özetini üreterek, ürettiği değeri geriye döndürür.
	*/
	
	$Deger1		=	"Extra Eğitim";
	echo "Orjinal İçerik 1 : " . $Deger1 . "<br />";
	$Deger2		=	"Sait Gülen";
	echo "Orjinal İçerik 2 : " . $Deger2 . "<br />";
	
	$Sifreleme	=	hash_init("md5");
	
	hash_update($Sifreleme, $Deger1); // İlk update edildiğinde içerik : Extra Eğitim
	hash_update($Sifreleme, $Deger2); // ek update edildiğinde içerik : Extra EğitimSait Gülen
	
	$Sonuc		=	hash_final($Sifreleme);
	
	echo "md5 özeti : " . $Sonuc . "<br />";
	
	/*
Temel Kavram: Kutuya Mektup Atmak
Hayal et, bir "mektup kutun" (hash contextin) var. İçine farklı veri parçaları (mektuplar, mesajlar, dosyalar) atabiliyorsun ve kutunun sonunda tek bir özet bilgi (hash sonucu) çıkarıyorsun. Her fonksiyon bu kutu ile bir işlem yapıyor.

hash_init()
Kutu oluşturmak: Bir kutu açmak gibi, hash_init() fonksiyonu ile kullanmak istediğin algoritmayı belirtirsin ve sana yeni, boş bir kutu (context) verir.

hash_update()
Kutuya mektup atmak: Elindeki herhangi bir veriyi bu kutuya atarsın. Kaç defa, kaç parça olursa olsun, her seferinde kutuya yeni veri eklemiş olursun. Yani hash_update() ile yeni veri eklersin.

hash_copy()
Aynı kutudan yedek almak: Bazen elindeki kutunun aynısından bir kopya almak istersin. Mesela verinin bir kısmını işledin, sonra farklı devam etmek veya kayıt etmek istedin. hash_copy() ile orijinal kutunun aynısı bir yedek alabilirsin. Böylece farklı şekillerde devam edebilirsin.

hash_final()
Kutuyu kapatıp özet çıkarmak: En son elindeki kutuda olan bütün mesajları bir araya getirip özel bir makineyle işlersin ve kutudan bir "özet" (hash sonucu) çıkarırsın. Yani hash_final() çağrılınca kutudaki tüm veriler tek kısa bir kod olarak çıkar ve kutu kapanır. Bundan sonra kutuya ekstra veri atamazsın.

Uygulama Örneği (Feynman Basitliğiyle)
hash_init('sha256'): "Bir sha256 algoritmalı kutu verdim eline, kullanmaya başla.”

hash_update(context, 'merhaba'): “Kutuya bir 'merhaba' mektubu attın.”

hash_update(context, 'dünya'): “Aynı kutuya şimdi de 'dünya' mektubu attın.”

hash_copy(context): “Aynı durumda yedek bir kutu çıkardın, her ikisinde de aynı mektuplar var.”

hash_final(context): “Kutunun kapağını kapattın ve özetini (hash) aldın.”

hash_update(yedek, 'ekstra'): “Yedek kutuya ekstra bir mektup atabilirsin; ve sonra hash_final(yedek) ile farklı bir özet alırsın.”

Son olarak: Her kutu kendi özetini çıkardıktan sonra yola devam eder; orijinaliyle yedeği farklılaşabilir.

Bu döngü sayesinde büyük veya parçalı verilerin özetini adım adım hesaplayabilir, gerektiğinde yedek alıp farklı yollar izleyebilirsin—tıpkı elinde iki aynı kutu varken yollarını ayırmak gibi düşünülebilir.


	*/
	
	?>
</body>
</html>