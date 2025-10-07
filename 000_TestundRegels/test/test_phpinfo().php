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
	phpinfo()			:	PHP'nin o anki durumu hakkındaki bilgilerin ekran çıktılanmasını sağlamak için kullanılır.
	Değerler			:	INFO_ALL | INFO_LICENSE | INFO_CREDITS | INFO_GENERAL | INFO_CONFIGURATION | INFO_MODULES | INFO_ENVIRONMENT | INFO_VARIABLES
	INFO_ALL			:	TÜM BİLGİLER (ÖNTANIMLI DEĞERDİR)
	INFO_LICENSE		:	LİSANS BİLGİLERİ
	INFO_CREDITS		:	KATKIDA BULUNANLARIN BİLGİLERİ
	INFO_GENERAL		:	GENEL BİLGİLERİ
	INFO_CONFIGURATION	:	KONFİGRASYON BİLGİLERİ
	INFO_MODULES		:	MODÜL BİLGİLERİ
	INFO_ENVIRONMENT	:	ORTAM BİLGİLERİ
	INFO_VARIABLES		:	$_SERVER SÜPER GLOBALİ / ÖNTANIMLI DEĞİŞKEN BİLGİLERİ
	*/
	phpinfo();
	phpinfo(INFO_CREDITS);
    phpinfo(INFO_ENVIRONMENT);
    phpinfo(INFO_VARIABLES);
    // phpinfo(INFO_ALL); // Tüm bilgileri görüntülemek için kullanılabilir.
    // phpinfo(INFO_LICENSE); // Lisans bilgilerini görüntülemek için kullanılabilir.
    // phpinfo(INFO_GENERAL); // Genel bilgileri görüntülemek için kullanılabilir.
    // phpinfo(INFO_CONFIGURATION); // Konfigürasyon bilgilerini görüntülemek için kullanılabilir.
    // phpinfo(INFO_MODULES); // Yüklü modüllerin bilgilerini görüntülemek için kullanılabilir.
	?>
</body>
</html>