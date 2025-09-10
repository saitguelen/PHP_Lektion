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
	curl_version()		:	Kullanılmakta olan server'da (sunucuda) çalışmakta olan libcurl kütüphanesinin tüm bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/

	$Degerler	=	curl_version();

	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";

	//curl_version();

	/*
	Array
(
    [version_number] => 525312
    [age] => 10
    [features] => 1361907613
    [ssl_version_number] => 0
    [version] => 8.4.0
    [host] => x86_64-pc-win32
    [ssl_version] => OpenSSL/3.1.3
    [libz_version] => 1.2.12
    [protocols] => Array
        (
            [0] => dict
            [1] => file
            [2] => ftp
            [3] => ftps
            [4] => gopher
            [5] => gophers
            [6] => http
            [7] => https
            [8] => imap
            [9] => imaps
            [10] => ldap
            [11] => ldaps
            [12] => mqtt
            [13] => pop3
            [14] => pop3s
            [15] => rtsp
            [16] => scp
            [17] => sftp
            [18] => smb
            [19] => smbs
            [20] => smtp
            [21] => smtps
            [22] => telnet
            [23] => tftp
        )

    [ares] => 
    [ares_num] => 0
    [libidn] => 
    [iconv_ver_num] => 0
    [libssh_version] => libssh2/1.10.0
    [brotli_ver_num] => 0
    [brotli_version] => 
)
	 */

	phpinfo();
	?>
</body>

</html>