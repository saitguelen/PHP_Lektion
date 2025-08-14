<!DOCTYPE html>
<html lang="en,de,tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAIT PHP</title>
</head>
<body>

    <?php
    /*
    array_merge()	: İki veya daha fazla diziyi birleştirmek için kullanılır.
    array_merge_recursive() : İki veya daha fazla diziyi birleştirirken, aynı anahtarları olan elemanları bir dizi içinde birleştirir.
    */
    echo "array_merge() ==> İki veya daha fazla diziyi birleştirmek için kullanılır.<br />";
    echo "array_merge_recursive() ==> İki veya daha fazla diziyi birleştirirken, aynı anahtarları olan elemanları bir dizi içinde birleştirir.<br />";
    echo "<hr />";
    echo "<br />";
    echo "Örnek diziler: <br />";

    $Dizi1	=	array("A" => "Volkan", "B" => "Onur", "C" => "Hakan","E" => "Aslı");
    $Dizi2	=	array("B" => "Hakan", "C" => "Banu", "D" => "Merve");
    $Sonuc	=	array_merge($Dizi1, $Dizi2);

    echo "array_merge() ile elde edilen dizi : ";
    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";
    echo "<hr />";
    echo "<br />";

    $Sonuc2	=	array_merge_recursive($Dizi1, $Dizi2);
    echo "array_merge_recursive() ile elde edilen dizi : ";
    echo "<pre>";
    print_r($Sonuc2);
    echo "</pre>";
    echo "<br />";
    echo "Görüldügü gibi ayni anahtara sahip elemanlar bir dizi içinde birleştirildi.<br /> B anahtarına sahip elemanlar :Onur e Hakan <br />
    C anahtarına sahip elemanlar : Hakan e Banu <br /> E ve D anahtari birer kisi Asli ve Merve";
    
    echo "<hr />";
    echo "<br />";

    ?>

</body>
</html>