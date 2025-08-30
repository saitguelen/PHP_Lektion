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
	
	$_SESSION["Kullanici"]	=	array("Adi" => "Sait", "Soyadi" => "Gülen", "EmailAdresi" => "info@extraegitim.com", "Telefonu" => "0178 225 51 44");
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	?>
</body>
</html>