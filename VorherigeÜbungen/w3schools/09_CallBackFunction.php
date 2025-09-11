<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Callback Functions</h1>
    <p>
    <pre style="border: 20px; background-color: aqua; font-size: large;">
            Callback Functions
A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.

Any existing function can be used as a callback function. To use a function as a callback function, 
pass a string containing the name of the function as the argument of another function:

ass a callback to PHP's array_map() function to calculate the length of every string in an array:
        </pre>
    <pre>Geri arama işlevi (genellikle sadece "geri arama" olarak adlandırılır), başka bir işleve argüman olarak aktarılan bir işlevdir.
Mevcut herhangi bir fonksiyon geri çağırma fonksiyonu olarak kullanılabilir. Bir işlevi geriçağırım işlevi olarak kullanmak için, 
işlevin adını içeren bir dizeyi başka bir işlevin argümanı olarak geçirin:
Örnek:
Bir dizideki her dizenin uzunluğunu hesaplamak için PHP'nin array_map() işlevine bir geriçağırım iletin:</pre>
    <pre><div style="display: block; background-color: yellow; border:dotted;">
     function my_callback($item)
    {
        return strtoupper($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $upper = array_map("my_callback", $strings);
    echo "<pre>";
    print_r($upper);
    echo "</div></pre>";
    </pre>
    </p>
    <?php
    function my_callback($item)
    {
        return strtoupper($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $upper = array_map("my_callback", $strings); //array deki bütün degiskenleri büyük harf ile yazar
    echo "<pre>";
    print_r($upper);
    echo "</pre>";

    function my_callback2($utem)
    {
        return strlen($utem); //verilen ifadedeki degerlerin uzunlugunu döndürür.
    }
    $uzun = array_map("my_callback2", $strings);
    echo "Arraydeki karakter uzunlugu herbur degerin: <br />";
    echo "<pre>";
    print_r($uzun);
    echo "</pre>";


    ?>

</body>

</html>