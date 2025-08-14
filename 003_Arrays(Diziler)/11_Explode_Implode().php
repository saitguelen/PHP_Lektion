<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAiT PHP</title>
</head>
<body>

    <?php
    /*
    explode()	:	Verilen bir stringi, belirtilen ayırıcıya göre parçalara ayırmak için kullanılır.
    implode()	:	Verilen bir diziyi, belirtilen ayırıcı ile birleştirmek için kullanılır.
    */
    echo "explode() ==> Verilen bir stringi, belirtilen ayırıcıya göre parçalara ayırmak için kullanılır.<br />";
    echo "implode() ==> Verilen bir diziyi, belirtilen ayırıcı ile birleştirmek için kullanılır.<br />";
    echo "<hr />";

    $Metin		=	"Volkan,Onur,Hakan,Banu,Aslı";
    $Ayirici	=	",";
    $Sonuc		=	explode($Ayirici, $Metin);

    echo "explode() ile elde edilen dizi : ";
    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";

    $Sonuc2		=	implode(" Alakent- ", $Sonuc);
    echo "implode() ile elde edilen string :<br /> " . $Sonuc2;

    ?>

</body>
</html>