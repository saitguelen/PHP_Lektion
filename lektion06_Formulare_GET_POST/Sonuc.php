<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $GelenAdSoyadDegeri         = $_POST["AdSoyad"];
    $GelenEmailAdresiDegeri     = $_POST["E-MailAdresi"];
    $GelenTelefonDegeri         = $_POST["Telefon"];
    $GelenCinsiyetDegeri        = $_POST["Cinsiyet"];
    $GelenYasDegeri             = $_POST["Yas"];
    $GelenHobiler               = $_POST["Hobiler"];
    $GelenDosya                 = $_FILES["Dosya"];
    
    $DosyaninAdi                = $_FILES["Dosya"]["name"];
    $DosyaninTuru               = $_FILES["Dosya"]["type"];
    $DosyaninTempAdi            = $_FILES["Dosya"]["tmp_name"];
    $DosyaninHataDurumu         = $_FILES["Dosya"]["error"];
    $DosyaninBoyutu             = $_FILES["Dosya"]["size"];
    $GelenMesajDegeri           = $_POST["Mesaj"];

    $Yol                        = "Resim/";
    $DosyaYoluVeAdi             = $Yol . $DosyaninAdi;
    


    echo "Adiniz Soyadiniz : " . $GelenAdSoyadDegeri . "<br/>";
    echo "E-Mail Adresiniz :  " . $GelenEmailAdresiDegeri . "<br/>";
    echo "Telefonunuz : " . $GelenTelefonDegeri . "<br/>";
    echo "Cinsiyetiniz:  " . $GelenCinsiyetDegeri . "<br/>";
    echo "Yasiniz:  " . $GelenYasDegeri . "<br/>";
    echo "Mesajiniz: ". $GelenMesajDegeri. "<br/>";
    echo "Hobileriniz: <br/>";
    foreach ($GelenHobiler as $Bilgiler) {
        echo $Bilgiler . " ";
    }
    echo "<br>";
    echo "<hr>";
    if (move_uploaded_file($DosyaninTempAdi, $DosyaYoluVeAdi)) {
        echo "Dosya Basari ile yüklendi.<br/>";
        echo "Dosyanin adi  : " . $DosyaninAdi . "<br/>";
        echo "Dosyanin türü  : " . $DosyaninTuru . "<br/>";
        echo "Dosyanin gecici dizini ve adi  : " . $DosyaninTempAdi . "<br/>";
        echo "Dosyanin hata durumu  : " . $DosyaninHataDurumu . "<br/>";
        echo "Dosyanin boyutu  : " . $DosyaninBoyutu . "<br/><hr>";
        echo "Yüklenen Resim: <br>";
        echo "<img src ='{$DosyaYoluVeAdi}'> ";
    } else {
        echo "HATA!!! Dosya Yüklenemedi!!!";
    }


    ?>

</body>

</html>