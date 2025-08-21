<!DOCTYPE html>
<html lang="en,de,tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>/*
     * return : Fonksiyonlarda deger döndürmek icin kullanilir
     */</p>
     <p>
        <pre>
            <code>
        function Islem(){
            $Deger = 15;
            $Deger2=25;
            $Sonuc= $Deger+$Deger2;
            return $Sonuc;
        }
        echo Islem();
            </code>
        </pre>
     </p>
    <?php
    /*
     * return : Fonksiyonlarda deger döndürmek icin kullanilir
     */

    function Islem(){
        $Deger = 15;
        $Deger2=25;
        $Sonuc= $Deger+$Deger2;
        return $Sonuc;
    }
    echo Islem();
    echo "<br />";
    echo "<br />";
    echo "<hr />";
    echo "<p> Coklu return yapmak icin de yine return kullaniriz ama cikti icin degiskenleri array ekleriz.</p>";
    function Dizi(){
        $Vorname = "Sait";
        $Nachname = "Gülen";
        $Stadt = "Heidelberg";
        $Alter = 35;
        $Beruf = "Mathematik Lehrer";

        return array($Vorname,$Nachname,$Stadt,$Alter,$Beruf);


    }
    //echo Dizi();
    $Ergebnis = Dizi();
    echo "<pre>";
    print_r($Ergebnis);
    echo "<pre />";

    echo "<br />";
    echo "<br />";
    echo "<hr />";

    echo "Vorname : ". $Ergebnis[0]. "<br />";
    echo "Nachname : ". $Ergebnis[1]. "<br />";
    echo "Stadt : ". $Ergebnis[2]. "<br />";
    echo "Alter : ". $Ergebnis[3]. "<br />";
    echo "Beruf : ". $Ergebnis[4] ;
    echo "<br />";
    echo "<br />";
    echo "<hr />";


    ?>
    
</body>
</html>