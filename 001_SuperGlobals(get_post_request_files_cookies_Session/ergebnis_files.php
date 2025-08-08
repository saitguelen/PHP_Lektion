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


    $GelenDosya = $_FILES["Dosya"];
    //Gelen Dosya Bilgileri
    
    echo "<pre>";
    print_r($GelenDosya);
    echo "</pre>";

    //Ayrica tek tek de yazdiralim
    //Wir lassen sie auch einen nach dem anderen aufschreiben.
    echo "<p>Wir lassen sie auch einen nach dem anderen aufschreiben.</p>";

    echo "<hr>";
    echo "Dosya Adı: " . $GelenDosya["name"] . "<br />";
    echo "Dosya Türü: " . $GelenDosya["type"] . "<br />";
    echo "Dosya Boyutu: " . $GelenDosya["size"] . "<br />";
    echo "Dosya Geçici Adı: " . $GelenDosya["tmp_name"] . "<br />"; 

	?>

</body>
</html>