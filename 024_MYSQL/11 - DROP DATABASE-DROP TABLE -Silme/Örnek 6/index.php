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
	DROP DATABASE	:	MySQL sunucusu içerisindeki herhangi bir database'i silmek için kullanılır.
	DROP TABLE		:	MySQL sunucusu içerisinde bulunan database içerisindeki herhangi bir tabloyu silmek için kullanılır.
	*/

    $Database = new mysqli("localhost","root","", "extraegitim");
    $Database->set_charset("UTF8");

    if($Database->connect_errno){
        echo "Baglanti calismasi devam ediyor..<br />";
        echo "Hata: " . $Database->connect_error . "<br>";

    }else{
        echo "Databank baglantisi kuruldu..<br/>";

    }

    $Query = $Database->query("DROP DATABASE extraegitim");

    if($Query){
        echo "Silinimek istenen database silindi.<br />";

    }else{
        echo "Database silerken hata olustu.<br>";

    }

    $Database->close();
    ?>
</body>
</html>