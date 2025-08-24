<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Erstes PHP-Programm</title>
    <style>
        h1{color: green;}
    </style>
    
    
    
    </head>
    <body>


<?php echo"<h1>Hallo Welt</h1>";
// kommentar wie in Java
// echo ist der Ausgabe Befehl
// In Python print oder in Java System.out.println("...");
/*Ich bin ein 
mehrzeiliger
Kommentar*/
    // Direkt HTML-Code innerhalb von PHP-Code ist nicht zulässig
//Definition einer Variablen. Ähnlich  wie Python, ohneAngabe des Datentyps
$alter=12;
        
echo"Ich bin $alter Jahre alt.";
        
echo"<div>";
        echo"Hallöchen";
echo"</div>";
    
?>
        

   </body>
    </html>