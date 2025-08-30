<?php
	require_once("Siniflar/VolkanAlakent.php");
	require_once("Siniflar/OnurTatli.php");
	require_once("Siniflar/UmitOkudan.php");
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
	<p>Hepsinin class ismi Deneme olmasina ragmen namespace kullandigimizda hata VERMEZ!</p>
	<hr>
	<?php
	$Bir = new VolkaninSiniflari\Deneme;
	echo $Bir->Isim."<br/>";
	$Iki = new UmitinSiniflari\Deneme;
	echo $Iki->Isim."<br/>";
	$Uc = new OnurunSiniflari\Deneme;
	echo $Uc->Isim."<br/>";

	?>
</body>
</html>