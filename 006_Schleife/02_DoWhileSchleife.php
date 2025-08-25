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
    
    döngü baslatir while dan farkli olarak en basta bir kere döner sonra döngüye girer.

    Yapisi:

    do {
    
        Kod Bloklari
    }while(Kosul):

    */

    $Deger =1;

    do{
        if($Deger%3==0){
            echo "Bu sayi".$Deger. "  3'ebölünüyor.<br>";
              }elseif($Deger%5==0){
                echo "Bu sayi".$Deger. "  5'e bölünüyor.<br>";

              }
              $Deger++;

              }while($Deger<=10);
    


    ?>
    
</body>
</html>