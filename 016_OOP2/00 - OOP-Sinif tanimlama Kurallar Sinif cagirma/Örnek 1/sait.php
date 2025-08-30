<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    class SAIT{
        public $isim        ="Sait m. ";
        public const SOYISIM="Gülen";
        public function Bilgiler(){
            $Meslek = "Mathematik Lehrer und Fachinformatiker";
            $Sehir  = "Weinheim";
            $Metin  = "Meslegi: ".$Meslek . "<br> Ili : ". $Sehir;
            return $Metin;
        }
        public function Yas(){
            $SimdikiYil = date("Y");
            $Rechnung =$SimdikiYil-1987;
            return $Rechnung;
        }
        
    }

    $Sonuc  = new Sait;
    echo "Isim Soyisim : ". $Sonuc->isim . " ". Sait::SOYISIM. "<br>" . $Sonuc->Bilgiler()."<br/> "." Bu seneki yasi: ".$Sonuc->Yas()."<br/>";
    echo "Bugünün tarihi ve saati: ".date("d-m-Y H:i:s" );
    ?>
    
</body>
</html>