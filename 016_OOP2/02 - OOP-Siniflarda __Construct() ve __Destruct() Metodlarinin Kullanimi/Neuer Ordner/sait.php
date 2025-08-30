<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    	/*
	__construct()		:	Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
	__destruct()		:	Belirtilecek olan sınıfa, yıkıcı metod tanımlamak için kullanılır.
	*/
    class Sait{



        public  function __construct(){
            echo "yapici metod devreye girdi.<br/>";
        }

        public function __destruct(){
            echo "Sinif icerisindeki tüm özellik ve metodlar calismasi tamamlandigi icin yikici metod devreye girdi.<br>";
        }
        public $Isim    =   "Sait";
        public $SoyIsim =   "Gülen";


        public function Yaz(){
            $Metin = "PHP egitim dersleri OOP.<br/>";
            return $Metin;
        }
    }
    $IslemYap = new Sait;
    echo $IslemYap->Isim. " ". $IslemYap->SoyIsim. "<br/>". $IslemYap->Yaz(). "<br/>";
    ?>
    
</body>
</html>