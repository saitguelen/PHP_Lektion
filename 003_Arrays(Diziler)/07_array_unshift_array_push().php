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
    array_unshift() fonksiyonu, bir diziye bir veya daha fazla eleman eklemek için kullanılır.
    Bu fonksiyon, belirtilen elemanları dizinin başına ekler.Ayni zamanda eklenecek olan eleman veya elemanlar dizinin eleman sayisini döndürür.


    array_push() fonksiyonu ise, bir diziye bir veya daha fazla eleman eklemek için kullanılır.
    Bu fonksiyon, belirtilen elemanları dizinin sonuna ekler.
    */

    $Isimler = array("Volkan", "Hakan", "Sait");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    // array_unshift() ile eleman ekleme
    array_unshift($Isimler, "Ali", "Ayşe");
    echo "<p>array_unshift() ile eleman ekledikten sonra dizi: ==> dizinin başına ekler</p>";
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    // array_push() ile eleman ekleme
    array_push($Isimler, "Fatma", "Mehmet");
    echo "<p>array_push() ile eleman ekledikten sonra dizi: ==> dizinin sonuna ekler</p>";
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    //diziler anahtarli olursa nasil olur?
    $AnahtarliDizi = array(
        "isimler" => array("Volkan", "Hakan", "Sait"),
        "yaslar" => array(25, 30, 35),
        "meslekler" => array("Mühendis", "Doktor", "Öğretmen")
    );

    echo "<pre>";
    print_r($AnahtarliDizi);
    echo "</pre>";

    array_unshift($AnahtarliDizi['isimler'], "Ali", "Ayşe");
    echo "<pre>";
    print_r($AnahtarliDizi);
    echo "</pre>";

    array_push($AnahtarliDizi['isimler'], "Fatma", "Mehmet");
    echo "<pre>";
    print_r($AnahtarliDizi);
    echo "</pre>";

    array_push($AnahtarliDizi['yaslar'], 40, 45);
    echo "<pre>";
    print_r($AnahtarliDizi);
    echo "</pre>";

?>

</body>
</html>
