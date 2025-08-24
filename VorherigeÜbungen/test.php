<?php
$a=7;
$b=12;
$erg=$a*$b;
echo"Das Ergebnis ist: $erg.\n <br><br>";

$c = "Eine Variable";
$d = &$c;
$c = "--Geänderte Variable:)<br><br>";
echo $d;

$test = "sait";
if (is_null($test)) {
echo "Variable ist NULL";
} else {
echo "Variable ist nicht NULL, sondern " . $test. "<br><br><br>";
}


$test = null;
if (is_null($test)) {
echo "Variable ist NULL<br><br>";
} else {
echo "Variable ist nicht NULL, sondern " . $test."<br><br>";
}


$test = "Textvariable";
if (isset($test)) {
echo $test."<br><br>";
} else {
echo "Variable nicht gesetzt<br><br>";
}

$test1 ;
if (isset($test1)) {
echo $test1."<br><br>";
} else {
echo "Variable nicht gesetzt<br><br>";
}

$a=7;
$b=12;
$erg=$b%$a;
echo"Das Ergebnis, $b geteilt durch $a rest: $erg.\n <br><br>";

$g = 7;
$h= 3;
$erg1 = ++$g + $h;
echo$erg1."<br><br>";

$w = 7;
$e= 3;
echo$w."<br><br>";
$erg2 = $w++ + $e."<br><br>";
echo$erg2."<br><br>";
echo$w."<br><br>";
    
$a = "Alles neu, ";
$b = "macht der Mai.";
$erg= $a . $b;
echo $erg."<br><br>";

$erg=7>3;
echo $erg."<br><br>";

?>