<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<h3>bu metodu belli bir saniye beklesin sonra ekrana gelsin mesela bes(5) saniye beklesin sonra sekme acilsin</h3>
	<p>
		<pre>
			/*
	sleep()				:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	usleep()			:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan mikrosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	time_nanosleep()	:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye ve nanosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	time_sleep_until()	:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan Unix zaman damgası geçerli zamanına kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	*/
	
	sleep(5);
	
	echo "Extra Eğitim";
		</pre>
	</p>
	<?php
	/*
	sleep()				:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	usleep()			:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan mikrosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	time_nanosleep()	:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye ve nanosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	time_sleep_until()	:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan Unix zaman damgası geçerli zamanına kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	*/
	echo date("H:i:s") . "<br />";
	
	sleep(5);
	
	echo date("H:i:s");
	echo "<br/>";
	echo "Extra Eğitim";
	
	?>
</body>
</html>