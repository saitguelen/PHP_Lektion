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

    $Database =  mysqli_connect("localhost","root","", "extraegitim");
    mysqli_set_charset($Database,"UTF8");

    if(mysqli_connect_errno()){
        echo "Baglanti calismasi devam ediyor..<br />";
        echo "Hata: " . mysqli_connect_error() . "<br>";

    }else{
        echo "Databank baglantisi kuruldu..<br/>";

    }

    $Query = mysqli_query($Database,"DROP DATABASE extraegitim");

    if($Query){
        echo "Silinimek istenen database silindi.<br />";

    }else{
        echo "Database silerken hata olustu.<br>";

    }

    mysqli_close($Database);
    ?>
</body>
</html>