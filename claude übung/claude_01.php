<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $yazilar = array("PHP'de Dört Islem", "PHP'de String", " PHP'de Diziler ", "PHP'de Fonksiyonlar ", " JavaScript ve PHP Karşilaştirmasi", " HTML CSS Temelleri ");

    foreach ($yazilar as $basliklar) {
        echo "<pre>";
        echo $basliklar . "<br>";
        echo "</pre>";
    }

    $Temiz = array_map(function ($baslik) {
        return strtolower(trim($baslik));
    }, $yazilar);

    foreach ($Temiz as $baslik) {
        echo $baslik . "<br>";
    }

    $filterphp = array_filter($Temiz, function ($baslik) {
        return strpos($baslik, 'php') !== false;
    });

    foreach ($filterphp as $hphpli) {
        echo $hphpli . "<br>";
    }

    echo count($filterphp);
    echo "<br>" . "<br>";

    foreach ($filterphp as $baslik) {
        $kisa = substr($baslik, 0, 20);
        if (strlen($baslik) > 20) {
            $kisa .= "...";
        }

        $kelime_sayisi = str_word_count($baslik);
    }
    echo "<ul>";
    echo "<li>";
    echo "<strong>Başlık:</strong> $kisa<br>";
    echo "<strong>Kelime sayısı:</strong> $kelime_sayisi<br>";
    echo "<strong>Tam başlık:</strong> <em>$baslik</em>";
    echo "</li><br>";

    echo "</ul>";



    ?>
</body>

</html>