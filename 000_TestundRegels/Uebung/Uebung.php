<?php
//Wir machen mit claude folgende Übung

function Vorstellung(){
    $isim = "Sait";
    $yas = 36;
    $sehir = "Heidelberg";
    $meslek = "Praktikant  PHP Developer";
    echo "Merhaba! Benim adim  ". $isim ." ". $yas . "  yasindayim ve " .$sehir . " sehrinde yasiyorum. Ayrica su an " .$meslek . " olarak is yapiyorum<br>";

}
Vorstellung();

function Vorstellung2($name,$alter,$stadt,$beruf){

    echo "Merhaba! Benim adim  ". $name ." ". $alter . "  yasindayim ve " .$stadt . " sehrinde yasiyorum. Ayrica su an " .$beruf . " olarak is yapiyorum<br>";
}
Vorstellung2("Nesibe",37,"weinheim","Lehrerin");
echo "<hr>";
function yasKontrol($age){
    echo "Hallo! Jetzt werden wir Ihr Alter analysieren und sehen, ob Sie volljährig sind! <br />";
    echo "Sie sind: $age Jahre alt <br />";
    if($age<18 && $age>=0){
        echo "Sie sind minderjährig <br />";
    }elseif ($age>=18 && $age<=65){
        echo "Arbeitsfähiges Alter <br />";
    }elseif ($age>65 && $age<90){
        echo "Sie sind im Rentenalter <br />";
    }else{
        echo "Können Sie bitte gültigeS Alter eingeben!!<br />";
    }
    echo "<hr>";
}
yasKontrol(15);
yasKontrol(29);
yasKontrol(80);
yasKontrol(-2);
yasKontrol(18);