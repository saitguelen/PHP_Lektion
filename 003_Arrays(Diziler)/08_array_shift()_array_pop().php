<!doctype html>
<html lang="de,tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>SAIT PHP</title>
</head>

<body>
	<?php
	/*
	array_shift()	:	Dizi içerisinde bulunan ilk elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
	array_pop()		:	Dizi içerisinde bulunan son elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
	*/
	echo "<hr />";
    echo "<p> array_shift() ve array_pop() Fonksiyonları </p>";
    echo "<hr />";
    echo "<p> array shift: dizi icersinde <strong>ilk</strong> elemanı siler</p>";
    echo "<p> array pop: dizi icersinde <strong>son</strong> elemanı siler</p>";
	echo "<p> Bu fonksiyonlar, dizi içeriğinden sildiği elemanın değerini de geriye döndürür.</p>";
	echo "<br />";
	echo "<p> Bir önke ders tekrari olarak: <br>
	basa eleman eklemek icin:	array_unshift()<br>
	sona eleman eklemek icin: array_push()</p>";
	echo "<hr />";
	echo "<br />";
	$Isimler	=	array("Volkan", "Onur", "Serkan", "Hakan", "Levent");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
    
	$IlkElemaniSil	=	array_shift($Isimler);
	$SonElemaniSil	=	array_pop($Isimler);
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	echo "Silinen İlk Elemanın Değeri : " . $IlkElemaniSil . "<br />";
	echo "Silinen Son Elemanın Değeri : " . $SonElemaniSil;
	
	array_pop($Isimler);

	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";

	//cok boyutlu arraylarda nasil uyguluyoruz ona bakalim

	echo "<hr />";
	echo "<p> Çok Boyutlu Arraylerde array_shift() ve array_pop() Fonksiyonları </p>";	
	echo "<p> Çok boyutlu dizilerde, iç içe dizilerdeki elemanları silmek için de aynı fonksiyonları kullanabiliriz.<br>
	 Ama burada dikkat edilmesi gereken nokta, hangi dizinin elemanını silmek istediğimizdir.<br>
	 Bunun için dizinin anahtarını belirtmemiz gerekmektedir.Anahtari belirledikten sonra, iç içe dizinin anahtarını kullanarak elemanları silebiliriz.</p>";

	echo "<br>";
	echo "<p> Mesela bir örnek yapalim</p>";
	$CokBoyutluDizi = array("Sait","Nesibe",array("Volkan", "Onur", "Serkan"),"Hakan","Levent");

	//önce ekrana array yazdiralim
	echo "<pre>";
	print_r($CokBoyutluDizi);
	echo "</pre>";

	echo "<p> Burada 2. indexteki dizinin son elemanını yani Serkan'i silmek istiyorum</p>";
	//simdi ben serkan silmek istiyorum
	array_pop($CokBoyutluDizi[2]); //Serkan'i sildik

	echo "<pre>";
	print_r($CokBoyutluDizi);
	echo "</pre>";

	echo "<p> Burada 2. indexteki dizinin ilk elemanını yani Volkan'i silmek istiyorum</p>";
	array_shift($CokBoyutluDizi[2]); //Volkan'i sildik
	echo "<pre>";
	print_r($CokBoyutluDizi);
	echo "</pre>";

	echo "<p> Simdi Volkan'i tekrar ekleyelim.Bunun icin array_unshift() fonksiyonunu kullanabilirim. </p>";
	array_unshift($CokBoyutluDizi[2],"Volkan");

	echo "<pre>";
	print_r($CokBoyutluDizi);
	echo "</pre>";

	echo "<p> Simdi son elemani yani Serkan'i tekrar ekliyorum.Bunun icin array_push() fonksiyonunu kullanabilirim. </p>";
	array_push($CokBoyutluDizi[2], "Serkan");
	echo "<pre>";
	print_r($CokBoyutluDizi);
	echo "</pre>";

	echo "<p> Simdi de dizinin sonuna  yeni bir eleman  ekliyorum.Bunun icin de yine array_push() fonksiyonunu kullanabilirim.</p>";
	array_push($CokBoyutluDizi,"Mucteba");

	echo "<pre>";
	print_r($CokBoyutluDizi);
	echo "</pre>";	

	echo "<p> Simdi de dizinin ilk elemanini silecegim.Bunun icin de yine array_shift() fonksiyonunu kullanabilirim.</p>";
	$DiziIlkEleman = array_shift($CokBoyutluDizi);
	echo "<pre>";
	print_r($CokBoyutluDizi);
	echo "</pre>";

	echo "<p>  Ilk Eleman : " . $DiziIlkEleman . " silindi.". "</p>";

	array_pop($Isimler);
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	?>
</body>
</html>