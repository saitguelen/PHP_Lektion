<?php

$alter =23;
if($alter >= 18) 
    echo "Sie sind volljährig";

else
    echo "Sie sind NICHT volljährig";
echo "<br>";

/*Haben wir nur 1 anweisung , dann können wir uns geschweifte Klammerpaar sparen, ansonsten sind sie Pflicht. Gleich Regel wie in Java*/
/*Das gleich gilt für Schleifen. Es gibt die gleichen Schleifarten wie in Java. While, for Schleife ist prädestiniert für Dinge wo ich weiß, wo ich anfange zu zählen und wann ich aufhöre. z.B. Zahlen von 1 bis 100 aufsummieren.do while schleife z.B. Zahlenratespiel*/

//Boolean
$regen = true;
if($regen)
    echo $regen;
else
    echo !$regen;
?>