<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Chunk Example</title>
</head>
<body>
    <h1>PHP Array Chunk Example</h1>
    <p> Array_Chunk() function splits an array into chunks of a specified size.<br>
</p>
    <?php
    $inputArray = range(1, 10);
    $chunkedArray = array_chunk($inputArray, 3);

    echo "<pre>";
    print_r($chunkedArray);
    echo "</pre>";
    ?>
    <hr>
    <h2>Array Column Example</h2>
    <p>cok boyutlu bir dizi icerisinde bulunan elemanlari belirtilecek olan anahtar kosullarina göre bicimlendirerek yeni bir dizi olusturmak icin kullanilir.</p>
    <?php
    $inputArray = [
        ['id' => 1, 'name' => 'John'],
        ['id' => 2, 'name' => 'Jane'],
        ['id' => 3, 'name' => 'Doe'],
    ];
    $names = array_column($inputArray, 'name');

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    $Takimlar = array(array("kurulusYili" => 1907, "TakimAdi" => "Fenerbahçe"), array("kurulusYili" => 1905, "TakimAdi" => "Galatasaray"), array("kurulusYili" => 1903, "TakimAdi" => "Beşiktaş"));
    echo "<pre>";
    print_r($Takimlar);
    echo "</pre>";  

    $Sonuc = array_column($Takimlar, "TakimAdi");
    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";

    $Sonuc2 = array_column($Takimlar, "kurulusYili");
    echo "<pre>";
    print_r($Sonuc2);
    echo "</pre>";  
    ?>
</body>
</html>