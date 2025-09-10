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
	curl_getinfo()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun tüm bağlantı bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	curl_error()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun olası bir hata ile karşılaşması durumunda hata değerini bularak, bulduğu değeri geriye döndürür.
	*/

	$Oturum		=	curl_init("https://www.extraegitim.com");
	curl_exec($Oturum);
	$Bilgiler	=	curl_getinfo($Oturum);
	echo "<pre>";
	print_r($Bilgiler);
	echo "</pre>";
	curl_close($Oturum);
	/*
	Array
(
    [url] => https://www.extraegitim.com/
    [content_type] => 
    [http_code] => 0
    [header_size] => 0
    [request_size] => 0
    [filetime] => -1
    [ssl_verify_result] => 0
    [redirect_count] => 0
    [total_time] => 0.000504
    [namelookup_time] => 0
    [connect_time] => 0
    [pretransfer_time] => 0
    [size_upload] => 0
    [size_download] => 0
    [speed_download] => 0
    [speed_upload] => 0
    [download_content_length] => -1
    [upload_content_length] => -1
    [starttransfer_time] => 0
    [redirect_time] => 0
    [redirect_url] => 
    [primary_ip] => 
    [certinfo] => Array
        (
        )

    [primary_port] => 0
    [local_ip] => 
    [local_port] => 0
    [http_version] => 0
    [protocol] => 0
    [ssl_verifyresult] => 0
    [scheme] => 
    [appconnect_time_us] => 0
    [connect_time_us] => 0
    [namelookup_time_us] => 0
    [pretransfer_time_us] => 0
    [redirect_time_us] => 0
    [starttransfer_time_us] => 0
    [total_time_us] => 504
    [effective_method] => GET
)
	*/
	?>
</body>

</html>