<?php

//Wir schreiben eine Funktion , die erstellen wir Multiziplizierte Tabelle


function carpimTablosu($sayi){

    for($i=1;$i<=10;$i++){
        echo "$sayi " ."* ".$i." = ". $sayi*$i."<br />";
    }
    echo"<hr />";
}
carpimTablosu(5);
carpimTablosu(3);
carpimTablosu(6);
echo "<hr />";
echo "<p> Simdide while ile yapalim </p> <br>";
function carpimTablosuWhile($zahl){
    $j = 1;
    while($j<=10){
        echo "$zahl " ."* ".$j." = ". ($zahl*$j)."<br />";
        $j++;

    }
    echo"<hr />";

}
carpimTablosuWhile(9);
echo "foreach ile bir örnek: <br />";
function carpimTablosuForeach($sayi){
    foreach(range(1, 10) as $i){
        echo "$sayi * $i = " . ($sayi * $i) . "<br />";
    }
    echo "<hr />";
}
carpimTablosuForeach(8);