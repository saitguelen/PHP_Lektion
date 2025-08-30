<?php 
//Array in PHP
//Ich kann unter einem Namen mehrere Werte speichern.

//Ältere Schreibweise aber immer noch gültig- also nicht deprecated.

$meinungen= array("ja","nein", "vielleicht");
//Zugriff auf ein Element über den Index wie in Python , JAVA.
echo "Zweite Word ist: ". $meinungen[1];

echo"<br>";


//for Schleife in PHP:Starke Ähnlichkeit mit Java 
//for(Initialisierung; boolsche Abbruchbedingungen; Update-Statement)
//Java: Objektvariable length für Arrays, length() String
//In PHP schreibt man anstatt length count
//Die Verkürzte Schreibweise für $i=$i +1; ist $i++--> wie in Java
//Wir wollen die Elemente untereinander ausgeben.

for($i=0; $i< count($meinungen); $i++)
    echo $meinungen[$i]."<br>";
    
//Neuere Schreibweise für Array seit PHP 5.4
//Ähnlich der Liste in Python
$familie=["Mama", "Papa", "Tochter", "Sohn"];
echo "Aufgabe: Mama, Papa, Tochter und  Sohn untereinander ausgeben:"."<br>";
for($i=0; $i< count($familie); $i++)
    echo $familie[$i]."<br>";


//Manchmal hat man auch das Bedirfnis, ein Array komplett auszugeben 
//sozusagen von links nach rechts 

//Bei einen Array kann man bei der for-Schleife immer den Fehler 
//machen, ein falsche Abbruchbedingung zu schrieben. 

//Besser: foreach Vorsicht! In Java nutzt man trotzdem nur das 
//Schlisselwort for.

$besteck = ["Gabel", "Messer", "Löffel", "Kuchengabel"];

//foreach (Name der Datenstruktur as $irgendeinName)

    foreach($besteck as $Anahtar => $wert)
        echo $Anahtar ."=>". $wert." </br>";

echo "<br>";

for ($i = 0; $i < 11; $i++) {
    if ($i % 2 == 0) {
        echo $i . " "; //Konkatenieren
    }
}

?>