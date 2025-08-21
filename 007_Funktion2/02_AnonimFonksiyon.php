<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Anonim Fonksiyon</h1>
    <p>Normalde fonksiyon tanimlarken adini ve icine de islevini yazip en sonda da o fonfsoynu ismi ile cagiriyorduk.</p>
    <p>Anonim fonksiyon isimsiz fonksiyon demek, bizde fonksiyon calistirmak icin ismi ile cagirmamiz gerek e isim yoksa fonksiyonu nasil cagiricaz?</p>
    <p>Iste burada özel bir yapi devreye griyor</p>
    <p>
        <pre>
            Normal Fonksiyon Yapisi: <br>
            <code>funktion Name(){<br>
                echo "BlaBlaBlaBla";<br>
                Name();<br>
            </code>
        </pre>

    </p>
    <p> 
        Anonim Fonksiyon Yapisi: <br>
        <code>
            $Yazdir = function(){<br>
                echo "BlaBlaBlaBla";<br>
            }<br>
            $Yazdir();<br>
        </code>
    </p>
    <p><strong>Dizilerde yaparken <code>$Islem[1](); </code> bu sekilde kullaniriz</strong></p>
    <h3>Örnek Kullanim</h3>
    <p>
        <pre>
            <code>
                 $Deger =12;
    $Test =function (){
        global $Deger; // Global değişkeni fonksiyon içerisinde kullanabilmek için global anahtar kelimesini kullanıyoruz.
        $Deger2=25;
        $Sonuc=$Deger+$Deger2;
        echo $Sonuc;
    };
    $Test();
            </code>
        </pre>
    </p>
    <?php
    $Deger =12;
    $Test =function (){
        global $Deger; // Global değişkeni fonksiyon içerisinde kullanabilmek için global anahtar kelimesini kullanıyoruz.
        $Deger2=25;
        $Sonuc=$Deger+$Deger2;
        echo $Sonuc;
    };
    $Test();

    ?>


</body>

</html>