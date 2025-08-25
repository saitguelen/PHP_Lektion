<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schkeife</title>
</head>
<body>
    <?php

    /* 
    while : Döngü baslatir

    Yapisi:

    while(Kosul){
          Kod Bloklari
        
        }

    
    */

    $Start =1;
    while($Start<=10){
        echo "Sayimizin son durumu: ". $Start. "<br/>";
        $Start ++;
    }

    echo "<hr>";
    echo "<br/>";
    echo "Simdi de azalan bir döngü örnegi yapalim..<br/>";

    $Beginn = 100;
    while($Beginn>=1){
        echo "Sayimizin son durumu: ". $Beginn. "<br/>";
        if ($Beginn % 5 ==0){
            echo "Bu sayi yani ". $Beginn . "   5' e bölünüyor.<br/>";
        }else{
            echo "Bu sayi yani ". $Beginn . "   5'e bölünmüyor.<br/>";
        }

        
        $Beginn --;
       
        
    }
    echo "0 ' a ulastik. Döngü bitti!!!";

    ?>
    
</body>
</html>