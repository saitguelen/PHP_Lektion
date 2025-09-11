<!doctype html>
<html lang="tr-TR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Extra Eğitim</title>
</head>

<body>
	<form action="sonuc.php" method="post">
		Adınız: <input type="text" name="ad"><br />
		Soyadınız : <input type="text" name="soyad"><br />
		Yaşınız : <select name="yas">
			<option value="">Lütfen Seçiniz</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
		</select><br />
		Sinifiniz: <input type="text" name="sinif"><br />
		Not Ortalamaniz: <input type="number" name="not_ort"><br />

		<input type="submit" value="Kaydet">
	</form>
	<br /><br /><br />
	<?php
	/*
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinin de / verilerini de eklemek için kullanılır.
	*/

	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

	if (mysqli_connect_errno()) {
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}

	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM ogrenciler");
	if ($Sorgu) {
		$KayitSayisi	=	mysqli_num_rows($Sorgu);
		if ($KayitSayisi > 0) {
			while ($Kayitlar = mysqli_fetch_object($Sorgu)) {
				echo $Kayitlar->id . " | " . $Kayitlar->ad . " | " . $Kayitlar->soyad . " | ". $Kayitlar->yas . " | " . $Kayitlar->sinif . " | " . $Kayitlar->not_ort .   "<br /><br />";
			}
		} else {
			echo "Kayıt Yok";
		}
	} else {
		echo "Sorgu Hatası";
	}
	//echo "Eklenen Kaydın IDsi : " . mysqli_insert_id($VeritabaniBaglantisi);
	mysqli_close($VeritabaniBaglantisi);

	?>
</body>

</html>