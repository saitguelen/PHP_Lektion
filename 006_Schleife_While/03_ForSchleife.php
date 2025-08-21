<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* for : Döngü baslatir

    Yapisi:

    for (baslangic; kosul; artim) {
        // kod bloklari
    }

    */
    
    for($Deger=1;$Deger<=10;$Deger++){
        echo $Deger . "<br/>";
    }

     echo "<hr>";
    echo "<br/>";
    echo "Simdi de azalan bir döngü örnegi yapalim..<br/>";

    for ($Beginn=100;$Beginn>=1;$Beginn--){
        echo $Beginn . "<br/>";
    }

    

    ?>


</body>
</html>