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
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinin de / verilerini de eklemek için kullanılır.
	*/

    $Database = mysqli_connect("localhost", "root", "", "extraegitim");
    mysqli_set_charset($Database, "UTF8");

    if (mysqli_connect_errno()) {
        echo "Baglanti hatasi oldu! .<br />";
        echo "Hata Degeri: " . mysqli_connect_error() . "<br />";
        die();
    } else {

        echo "Database basari ile baglandi!!" . "<br>";
    }

    $Query  = mysqli_query($Database, "SELECT * FROM ogrenciler");

    if ($Query) {
        $KayitSayisi = mysqli_fetch_row($Query);
        if ($KayitSayisi > 0) {
            $Query2 = mysqli_query($Database, "INSERT INTO  ogrenciler (ad, soyad, yas, sinif, not_ort) VALUES ('Levent','Celik', 20, '9-a', 89)");
            if ($Query2) {
                echo "Kayit Basari ile eklendi.<br>";
            } else {
                echo "Eklenmedi<br><hr>";
            }
        }
    }
    $Query3 = mysqli_query($Database, "SELECT * FROM ogrenciler WHERE id=3");
    if ($Query3) {
        $KayitSayisi2 = mysqli_fetch_row($Query3);
        if ($KayitSayisi2 > 0) {
            while ($Kayitlar = mysqli_fetch_assoc($Query3)) {
                echo "OGrenci ID Degeri: " . $Kayitlar["id"] . "<br />";
                echo "OGrenci ad Degeri: " . $Kayitlar["ad"] . "<br />";
                echo "OGrenci soyad Degeri: " . $Kayitlar["soyad"] . "<br />";
                echo "OGrenci yas Degeri: " . $Kayitlar["yas"] . "<br />";
                echo "OGrenci sinif Degeri: " . $Kayitlar["sinif"] . "<br />";
                echo "OGrenci Not Ortalama Degeri: " . $Kayitlar["not_ort"] . "<br /><hr>";
                
            }
             //echo "Eklenen Kaydın IDsi : " . mysqli_insert_id($Database);
        } else {
            echo "Sorgu hatasi!!!<br />";
        }
        // if ($Query3) {
        //     echo "Kayıt Başarıyla Yapıldı.<br />";
        //     echo "Eklenen Kaydın IDsi : " . mysqli_insert_id($Database);
        // } else {
        //     echo "Sorgu Hatası";
        // }
    }

    mysqli_close($Database);
    ?>
</body>

</html>