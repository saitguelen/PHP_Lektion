<?php
session_start();
?>
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
	session_start()		:	session (oturum) başlatmak veya session'ları (oturumları) takip etmek için kullanılır.
	session_destroy()	:	Daha önceden oluşturulmuş olan session'ları (oturumları) silmek için kullanılır.
	*/
		
	$_SESSION["KullaniciAdi"]			=	"Sait";
	$_SESSION["KullaniciSoyadi"]		=	"Gülen";
	$_SESSION["KullaniciEmailAdresi"]	=	"info@phpextraegitim.com";
	$_SESSION["KullaniciTelefonu"]		=	"0178 225 51 44";
	$_SESSION["KullaniciSehri"]			=	"Erzurum";
	
	echo $_SESSION["KullaniciEmailAdresi"];
	echo "</br>";
	echo $_SESSION["KullaniciSoyadi"];
	echo "</br>";
	echo $_SESSION["KullaniciSehri"];
	
	?>
</body>
</html>