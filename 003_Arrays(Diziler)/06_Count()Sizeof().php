<!DOCTYPE html>
<html lang="en, de, tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sait PHP</title>
</head>
<body>
    <?php
    /*

    Dizi eleman sayısını bulmak için count() veya sizeof() fonksiyonlarını kullanabilirsiniz.
    count() ve sizeof() fonksiyonları aynı işlemi yapar, bu yüzden ikisi de kullanılabilir.
    count() fonksiyonu, dizinin eleman sayısını döndürür.
    sizeof() fonksiyonu ise count() fonksiyonunun bir takma adıdır ve aynı şekilde çalışır.
    Bu fonksiyonlar, dizinin kaç eleman içerdiğini öğrenmek için kullanılır.
    COUNT_RECURSIVE : Cok boyutlu dizilerde tüm boyutlar icersindeki elemanlarda sayma islemine dahil edilir.
    */ 

    $Isimler = array("Volkan", "Hakan", "Sait", "Ali", "Ayşe");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    echo "<p>Dizi eleman sayısını bulmak için count() veya sizeof() fonksiyonlarını kullanabilirsiniz.</p>";
    echo "<p>count() ve sizeof() fonksiyonları aynı işlemi yapar, bu yüzden ikisi de kullanılabilir.</p>";
    echo "<p>count() fonksiyonu, dizinin eleman sayısını döndürür.</p>";
    echo "<p>sizeof() fonksiyonu ise count() fonksiyonunun bir takma adıdır ve aynı şekilde çalışır.</p>";
    echo "<p>Bu fonksiyonlar, dizinin kaç eleman içerdiğini öğrenmek için kullanılır.</p>";
    echo "<p>COUNT_RECURSIVE : Cok boyutlu dizilerde tüm boyutlar icersindeki elemanlarda sayma islemine dahil edilir.</p>";

    $DizininElemanSayisi = count($Isimler);

    echo "<p>Dizinin eleman sayısı: " . $DizininElemanSayisi . "</p>";

    // sizeof() fonksiyonu ile eleman sayısını bulma
    $DizininElemanSayisi2 = sizeof($Isimler);
    echo "<p>sizeof() fonksiyonu ile dizinin eleman sayısı: " . $DizininElemanSayisi2 . "</p>";

    //Simdi cok boyutlu yapilara gelelim:
    $CokBoyutluDizi = array(
        array("Volkan", "Hakan", "Sait"),
        array("Ali", "Ayşe", "Fatma"),
        array("Mehmet", "Ahmet", "Hasan")
    );

    echo "<pre>";
    print_r($CokBoyutluDizi);
    echo "</pre>";

    $CokBoyutluDizininElemanSayisi = count($CokBoyutluDizi);
    echo "<p>Cok boyutlu dizinin eleman sayısı: " . $CokBoyutluDizininElemanSayisi . "</p>";

    // COUNT_RECURSIVE ile eleman sayısını bulma
    $CokBoyutluDizininElemanSayisi2 = count($CokBoyutluDizi, COUNT_RECURSIVE);
    echo "<p>COUNT_RECURSIVE ile cok boyutlu dizinin eleman sayısı: " . $CokBoyutluDizininElemanSayisi2 . "</p>";   
    ?>
