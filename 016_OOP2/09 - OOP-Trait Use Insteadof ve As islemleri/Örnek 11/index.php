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
	trait		:	Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
	use			:	Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
	insteadof	:	Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır.
	as			:	Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.
	*/

	trait Kisi
	{

		private function Goster()
		{

			$IsimSoyisim	=	"Sait Gülen";
			return $IsimSoyisim;
		}
	}


	class Deneme
	{

		use Kisi {
			Kisi::Goster as public;
		}
	}

	$Sonuc	=	new Deneme;

	echo $Sonuc->Goster();

	?>
	<hr>
	<p>"AS" ile private bir variable'yi public yaparak görünür olsun yapabiliriz yada tam tersi de mümkün</p>
	<pre>
		<scan>
			
	trait Kisi {

		private function Goster(){
			
			$IsimSoyisim	=	"Sait Gülen";
			return $IsimSoyisim;
			
		}

	}

	
	class Deneme {
		
		use Kisi { Kisi::Goster as public; }
		
	}
	
	$Sonuc	=	new Deneme;
	
	echo $Sonuc->Goster();
		</scan>
	</pre>
</body>

</html>