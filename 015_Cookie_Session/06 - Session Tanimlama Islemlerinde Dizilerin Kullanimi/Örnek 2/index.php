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
	
	$_SESSION["Kullanici"]	=	["Adi" => "Sait", "Soyadi" => "Gülen", "EmailAdresi" => "info@extraegitim.com", "Telefonu" => "0535 225 51 44"];
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	$ZamanDamgasi =time() +((60*60)+30);
	setcookie("Kullanici[Adi]", "Sait",$ZamanDamgasi);
	setcookie("Kullanici[Soyadi]","Gülen",$ZamanDamgasi);
	setcookie("Kullanici[E-Mail]", "sait@gmail.com",$ZamanDamgasi);
	setcookie("Kullanici[Tel]", "01785245 01 23",$ZamanDamgasi);
	
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	?>
</body>
</html>