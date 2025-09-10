<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $Database = mysqli_connect("localhost", "root", "", "extraegitim");
    mysqli_set_charset($Database, "UTF8");

    if (mysqli_connect_errno()) {
        echo "Baglanti hatasi!!!<br>";
        echo "Hata: " . mysqli_connect_error() . "<br>";
    } else {
        echo "Basari ile baglandi!!!<br>";
    }

    $Query = mysqli_query($Database, "SHOW TABLES");
    if($Query){
        while($TabloAdi=mysqli_fetch_array($Query)){
            echo $TabloAdi[0]. "<br />";
        };

    }else{
        echo "Sorgu Hatasi!!!";

    }



    ?>

</body>

</html>