<?php 
//Logische Operatoren 

//Im Prinzip wie in Java. Logische UND &&, Logische ODER ||, Negation ! 
//Schreibweise von OR und AND wie in SQL
// Man kann aber auch AND oder OR nutzen 

//Login 

$user = "Anja"; //Im russischen ist Anja die Kurzform von Anna!
$passwort ="xyz";
//Erfolgreicher Login I 

if ($user== "Anna" AnD $passwort == "xyz")
    echo "Beide Bedingungen waren erfiillt - Zugriff erlaubt. <br>";
else
    echo "Zugriff nicht erlaubt!";

//Logisches ODER
    if ($user== "Anna" || $passwort == "xyz")
        echo "Eine oder beide Bedingungen waren erfüllt.";
        
        
?>