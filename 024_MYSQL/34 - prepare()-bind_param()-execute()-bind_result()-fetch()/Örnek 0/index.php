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
	prepare()		:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre query (sorgu) hazırlamak için kullanılır.
	bind_param()	:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'yi (sorguyu) derlemek için kullanılır.
		i 			:	integer
		d 			:	double
		s 			:	string
		b 			:	blob
	execute()		:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'yi (sorguyu) çalıştırmak için kullanılır.
	bind_result()	:	MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış ve execute() metodu kullanılarak çalıştırılmış olan query'nin (sorgunun) sonuçlarını almak için kullanılır.
	fetch()			:	MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve bind_result() metodu kullanılarak sonuçları alınmış olan query'nin (sorgunun) verilerini okumak için kullanılır.
	*/


    $Database = new mysqli("localhost", "root", "", "extraegitim");
    $Database->set_charset("UTF8");

    if ($Database->connect_errno) {
        echo "Es gibt database verbindung problem!!<br />";
        echo "Das Problem ist: " . $Database->connect_error . "<br />";
        die();
    }

    $Query = $Database->prepare("SELECT * FROM uyeler"); //Sorguyu hazirliyoruz. prepare ile hazirlaniyorsa execute edilmeli yani calistirilmali

    if ($Query) {

        $Query->execute(); //sorguyu calistirdik sonuc almak icin de bind_result ile göstermeliyiz
        $Query->bind_result($KayitIdsi, $KayitIsimSoyisim, $KayitEmaili, $KayitSifresi, $KayitTelefonNumarasi, $KayitYasi, $KayitCinsiyeti, $KayitSehri);
        //sorgudaki göstermek icin while döngüsü kullanmaiyiz
        while ($Query->fetch()) {
            //artik istedigimiz her degeri cekeriz
            echo $KayitIdsi . " | " . $KayitIsimSoyisim . " | " . $KayitEmaili . " | " . $KayitSifresi . " | " . $KayitTelefonNumarasi . " | " . $KayitYasi . " | " . $KayitCinsiyeti . " | " . $KayitSehri . " | " .  "<br />";
            
        }
    } else {
        echo "Sorgu hatasi!!<br />";
    }

    $Database->close();
    ?>
</body>

</html>