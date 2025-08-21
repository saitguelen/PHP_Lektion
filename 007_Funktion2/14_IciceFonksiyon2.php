<!DOCTYPE html>
<html lang="en,de,tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function IslemSonucuMesaji(){

        function TamamMesaji(){
            return "Isleminiz Basari ile Gerceklesdi... 😊";
        }


        function HataMesaji(){
            return "Islem Sirasinda Beklenmeyen Bir Hata Olustu.😯";

        }

        function UyariMesaji(){
            return "Dikkat!!! Yapilmaya Calisilan Islem Suanda Aktif Degildir..🤷‍♀️";
        }



    }
    // $Sonuc ="Tamam";
     $Sonuc ="Dikkat";
    //$Sonuc ="Hata";

    if($Sonuc == "Tamam"){
        IslemSonucuMesaji();
        $Mesaj = TamamMesaji();
        echo $Mesaj;
    }
    elseif($Sonuc=="Dikkat"){
        IslemSonucuMesaji();
        $Mesaj = UyariMesaji();
        echo $Mesaj;

    }else{
        IslemSonucuMesaji();
        $Mesaj = HataMesaji();
        echo $Mesaj;
    }
    
    ?>
    
</body>
</html>