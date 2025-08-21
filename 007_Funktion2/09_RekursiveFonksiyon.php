<!doctype html>
<html lang="de,tr,en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Sait Php</title>
</head>

<body>
	<?php
	
	echo "Burası Standart Bir Döngü Yapısı<br />";
	
	$Baslangic	=	1;
	
	while($Baslangic<=10){
		echo $Baslangic . "<br />";
		$Baslangic++;
	}
	
	echo "<br />Burası Recursive (Kendi kendini çağıran) fonksiyon yapısı<br />";
	
	function IslemYap($Sayi){
		
		if($Sayi<=10){
			
			echo $Sayi . "<br />";
			IslemYap($Sayi+1);
			
		}
		
	}
	
	IslemYap(1);
		
	?>
</body>
</html>