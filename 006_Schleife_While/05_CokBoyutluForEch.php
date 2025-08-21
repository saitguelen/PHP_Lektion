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
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", array("Aslı", "Hale", array("Siyah", "Beyaz", "Mavi"), "Banu", "Derya"), "Levent", "Serkan");
	echo "<pre>";
	print_r($Isimler);
    echo "<pre/>";
	
	echo "<br /><br />";
    echo $Isimler[3][2][2];
    echo "<br /><br />";
    echo $Isimler[3][3];
    echo "<br /><br />";
	
	foreach($Isimler as $Icerik){
		
		if(is_array($Icerik)){
            echo "Burada bir dzi var.<br/>";
			
			foreach($Icerik as $Deger){
				
				if(is_array($Deger)){
                    echo "Burada bir dzi var.<br/>";
					
					foreach($Deger as $Sonuc){
						echo $Sonuc . "<br />";
					}
					
				}else{
					echo $Deger . "<br />";
				}
			}
			
		}else{
			echo $Icerik . "<br />";
		}
	}
	
	?>
</body>
</html>