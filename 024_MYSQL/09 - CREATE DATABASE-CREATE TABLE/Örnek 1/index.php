<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	/*
	CREATE DATABASE		:	MySQL sunucusuna yeni bir database ekleme / oluşturma için kullanılır.
	CREATE TABLE		:	MySQL sunucusundaki database içerisie yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo içeriklerini başka bir tabloyada kopyalamak için de kullanılır.
	*/

	$Database  = mysqli_connect("localhost","root", "");
	mysqli_set_charset($Database,"UTF8");

	if(mysqli_connect_errno()){
		echo "Veritabani baglanti hatasi!>br>";
		echo "hata: ". mysqli_connect_error()."<br>";
	}else{
		echo "Veri baglantisi kuruldu". "<br/>";

	}

	$Sorgu  =  mysqli_query($Database, "CREATE DATABASE extraegitim CHARACTER SET utf8");
	if($Sorgu){
		echo "Veritabani olusturuldu";

	}else{
		echo "Veritabani hatasi";

	}

	
	?>
</body>
</html>