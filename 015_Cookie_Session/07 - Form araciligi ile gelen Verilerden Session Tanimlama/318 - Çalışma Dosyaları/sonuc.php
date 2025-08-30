<?php
require_once("ayar.php");
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
	$GelenKullaniciAdi			=	$_POST["KullanicininAdi"];
	$GelenKullaniciSifresi		=	$_POST["KullanicininSifresi"];
	$GelenKullaniciSehri		=    $_POST["KullanicininSehri"];
	$GelenCinsiyetDegeri		=	$_POST["Cinsiyet"];
	
	if(($GelenKullaniciAdi!= "") and ($GelenKullaniciSifresi!= "" and $GelenKullaniciSehri != "")){
		$_SESSION["Adi"]		=	$GelenKullaniciAdi;
		$_SESSION["Sifresi"]	=	$GelenKullaniciSifresi;
		$_SESSION["Sehri"]		=   $GelenKullaniciSehri;
		$_SESSION["Cinsiyeti"]	=	$GelenCinsiyetDegeri;
		echo "Merhaba " . $GelenKullaniciAdi ."  adi ile  ".$GelenCinsiyetDegeri ." olarak " . $GelenKullaniciSehri. "  den , siteye giriş yaptınız.<br />";
		echo "<a href='cikis.php'>Çıkış Yap</a>";
	}else{
		echo "Merhaba lütfen formda herhangi bir boş alan bırakmayınız.<br />";
		echo "<a href='index.php'>Forma Dön</a>";
	}
	
	?>
</body>
</html>