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
    foreach: Diziler icin döngü islemi baslatir,

    yapisi:

    foreach(Dizi Degiskeni as Anahtar atanacak degisken=>Eleman tanacak degisken){
        kod bloklari

        
    }
    
    */

    $Renler = array("Mavi", "Sari","Kirmizi", "Gri","Beyaz", "Yesil","Turuncu");
    echo "<pre>";
    print_r($Renler);
    echo "<pre/>";
    echo "<hr>";

    foreach($Renler as $Eleman){
        echo $Eleman."<br/>";
    }
    echo "<hr>";
    echo "<br>";


     foreach($Renler as $AnahtarDegeri => $Eleman){
        echo  "Anahtar Degeri: <strong> " . $AnahtarDegeri. "</strong>  =>  Eleman Degeri :<strong>". $Eleman."</strong><br/>";
    }

    ?>
</body>
</html>