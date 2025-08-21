<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
    <h1>Go to </h1>
    <p>
        <pre>
            /*
	goto	:	Kodlama dosyası içerisinde belirtilecek olan imlenmiş / hedeflenmiş satıra atlama koşulunu sağlamak için kullanılır.
	
	Yapısı :
	goto Yerimiz
	
	Yerimiz:
	*/
        </pre>


    </p>
	<?php
	/*
	goto	:	Kodlama dosyası içerisinde belirtilecek olan imlenmiş / hedeflenmiş satıra atlama koşulunu sağlamak için kullanılır.
	
	Yapısı :
	goto Yerimiz
	
	Yerimiz:
	*/
	
	//$Deger	=	"Egitimci";
	
	//goto $Deger; // HATA. Çünkü goto ifadesi için belirtilecek olan im / hedef bir değişkenden gelemez.
	
	echo "Onur Tatlı<br />";
	
	echo "Ümit Okudan<br />";

	goto  Egitimci;
	
	echo "Serkan Çelik<br />";
	
	echo "Hakan Alakent<br />";
    goto  Egitimci;
		
	echo "Volkan Alakent<br />";

Egitimci:
	echo "Egitimci labeline atlandi.<br />";
	?>
</body>
</html>