<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    // ALTER TABLE -> ADD-CHANGE-MODIFY-DROP

    $Database = mysqli_connect("localhost", "root", "", "extraegitim");
    mysqli_set_charset($Database, "UTF8");

    if (mysqli_connect_errno()) {
        echo "Baglanti saglanamadi!!<br>";
        echo "HATA: " . mysqli_connect_error() . "<br>";
    } else {
        echo "Baglanti kuruldu!!<br>";
    }
    echo "<br>";echo "<br>";echo "<br>";

    $Sorgu  = mysqli_query($Database, "CREATE TABLE uyeler (

    EmailAdresi varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
    
    KayitTarihi timestamp NOT NULL DEFAULT current_timestamp,
    YoneticiAciklamsi text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL

    ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");

    if ($Sorgu) {

        echo "Tablo olusturuldu!!<br>";
    } else {
        echo "Tablo olusmadi bir hata meydana geldi";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $Query    =    mysqli_query($Database, "ALTER TABLE uyeler
		ADD cinsiyet varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
		ADD sehir varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
		ADD durumu tinyint(1) UNSIGNED NOT NULL AFTER KayitTarihi,
        ADD Ad varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST
	");

    if ($Query) {
        echo "Degisiklikler Basari ile yüklendi <br>";
    } else {

        echo "Hata olustu!!";
    }
    echo "<br>";



    $Query2 = mysqli_query($Database, "ALTER TABLE uyeler
    CHANGE sehir Stadt varchar(50) NOT NULL");

    if ($Query2) {
        echo "Sehir sütunu Stadt olarak degisti<br>";
    } else {
        echo "hata meydana geldi!!<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $columnCheck = mysqli_query($Database, "SHOW COLUMNS FROM uyeler");
    $existingColumns = [];
    while ($row = mysqli_fetch_assoc($columnCheck)) {
        $existingColumns[] = $row['Field'];
    }

    echo "Mevcut sütunlar: ";
    echo "<pre>";
    print_r($existingColumns);
    echo "</pre>";
    echo "<br>";echo "<br>";echo "<br>";

    $Query4 = mysqli_query($Database,"TRUNCATE TABLE uyeler");
    if($Query4){

        echo "Tablo Bosaltildi!!!<br>";

    }else{
        echo "Hata meydana geldi.<br>";
        echo "Hata:" . mysqli_connect_error(). "<br>";

    }
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";


    $Query3 = mysqli_query($Database, "DROP TABLE IF EXISTS uyeler");

    if ($Query3) {
        echo "Tablo basari ile silindi";
    } else {

        echo "hata" . mysqli_connect_error() . "<br>";
    }



    mysqli_close($Database);



    ?>
</body>

</html>