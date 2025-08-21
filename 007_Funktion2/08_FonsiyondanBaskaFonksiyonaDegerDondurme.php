<!DOCTYPE html>
<html lang="en,de,tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function ParaBirimi($Birim, $Tutar)
    {
        if ($Birim == "Türk Lirasi") {
            $Kur = 1;
        } elseif ($Birim == "Amerikan Dolari") {
            $Kur = 4.069;
        } elseif ($Birim == "Euro") {
            $Kur = 5.254;
        } else {
            $Kur = 0;
        }
        return Hesapla($Birim,$Kur, $Tutar);
    }

    function Hesapla($BirimBilgisi,$KurBilgisi, $TutarBilgisi)
    {
        $Sonuc = $KurBilgisi * $TutarBilgisi;
        echo $TutarBilgisi. " Tutarli ". $BirimBilgisi. " karsiligi Tütk Lirasi olarak : ".$Sonuc. "TL<br /> Kur: " .$KurBilgisi;
    }

    ParaBirimi("Amerikan Dolari", 1000);
    echo "<br />";
    echo "<br />";
    echo "<hr />";
    ParaBirimi("Euro", 1500);



    ?>
</body>

</html>