<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Grundrechenarten</title>
    <style>
        span{color: green;
        font-weight: bold;}
    </style>
    
    
</head>
    
<body>
 <p>Das ist ein test:</p><br>



<?php
//Grundrechenarten
$zahl1 =2;
$zahl2 =4;
/* Um zeichenketten miteinander zu verbindenn
nimmt man in PHP den PUnkt */
echo "Das Ergebnis der Multiplikation: <span>".$zahl1*$zahl2."</span><br>";
echo "Das Ergebnis der Division: ".$zahl1/$zahl2."<br>";
echo "Das Ergebnis der Addition: ".$zahl1+$zahl2."<br>";
echo "Das Ergebnis der Subtaktion: ".$zahl1-$zahl2."<br>";

//Bei Rechenoperation verhält es sich so wie in Python
/* In Java ergibt 2/3=0.6666 ---> Nachkommastellen werden in Java
einfach abgeschitten*/

?>
    
    
   </body>
</html>
