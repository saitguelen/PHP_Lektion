<!doctype html>
<html lang="tr-TR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Sait PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
        }

        .output {
            background-color: #e8f4f8;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1>Dönüşüm Türleri</h1>
    <pre>
/* 
Değerler                        : (boolean) & (bool) | (integer) & (int) | (float) & (double) & (real) | (string) | (array) | (object) | (unset)
(boolean) & (bool)              : Mantıksal veri türüne dönüştürme.
(integer) & (int)               : Tam sayı veri türüne dönüştürme.
(float) & (double) & (real)     : Ondalıklı sayı veri türüne dönüştürme.
(string)                        : Alfanumerik (a-z A-Z 0-9) veri türüne dönüştürme.
(array)                         : Dizi veri türüne dönüştürme.
(object)                        : Nesne veri türüne dönüştürme.
(unset)                         : null (boş / değeri olmayan) veri türüne dönüştürme.
	
boolval()		                :	Herhangi bir değişken içeriğinin boolean (mantıksal) veri türü değerini geriye döndürür.
intval()		                :	Herhangi bir değişken içeriğinin integer (tam sayı) veri türü değerini geriye döndürür.
floatval()		                :	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
doubleval()		                :	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
	
*/
    </pre>

    <hr>

    <div class="output">
        <?php
        /* 
        Değerler                        : (boolean) & (bool) | (integer) & (int) | (float) & (double) & (real) | (string) | (array) | (object) | (unset)
        (boolean) & (bool)              : Mantıksal veri türüne dönüştürme.
        (integer) & (int)               : Tam sayı veri türüne dönüştürme.
        (float) & (double) & (real)     : Ondalıklı sayı veri türüne dönüştürme.
        (string)                        : Alfanumerik (a-z A-Z 0-9) veri türüne dönüştürme.
        (array)                         : Dizi veri türüne dönüştürme.
        (object)                        : Nesne veri türüne dönüştürme.
        (unset)                         : null (boş / değeri olmayan) veri türüne dönüştürme.
        */

        echo "<h3>String'den Object'e Dönüşüm:</h3>";

        $DegerBir = "5";
        $DegerBirVeriTuru = gettype($DegerBir);

        echo "Birinci Veri İçeriği : " . $DegerBir . "<br />";
        echo "Birinci Veri Türü : " . $DegerBirVeriTuru . "<br /><br />";

        $DegerIki = (object) ["scalar" => "5"];  // Düzeltildi
        $DegerIkiVeriTuru = gettype($DegerIki);

        echo "İkinci Veri İçeriği : " . $DegerIki->scalar . "<br />";
        echo "İkinci Veri Türü : " . $DegerIkiVeriTuru;

        echo "<hr>";
        echo "<hr>";
        echo "<br>";

        echo "<h3>Float'tan String'e Dönüşüm:</h3>";

        $DegerBir = 65.98;
        $DegerBirVeriTuru = gettype($DegerBir);

        echo "Birinci Veri İçeriği : " . $DegerBir . "<br />";
        echo "Birinci Veri Türü : " . $DegerBirVeriTuru . "<br /><br />";

        $DegerIki = (string) 65.98;
        $DegerIkiVeriTuru = gettype($DegerIki);

        echo "İkinci Veri İçeriği : " . $DegerIki . "<br />";
        echo "İkinci Veri Türü : " . $DegerIkiVeriTuru;

        echo "<hr>";
        echo "<br>";

        $DegerBir            =    "5";
        $DegerBirVeriTuru    =    gettype($DegerBir);

        echo "Birinci Veri İçeriği : " . $DegerBir . "<br />";
        echo "Birinci Veri Türü : " . $DegerBirVeriTuru . "<br /><br />";

        $DegerIki            =    (array) "5";
        $DegerIkiVeriTuru    =    gettype($DegerIki);

        echo "İkinci Veri İçeriği : <br />";
        echo "<pre>";
        print_r($DegerIki);
        echo "</pre>";
        echo "İkinci Veri Türü : " . $DegerIkiVeriTuru;

        echo "<hr>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        /*
	boolval()		:	Herhangi bir değişken içeriğinin boolean (mantıksal) veri türü değerini geriye döndürür.
	intval()		:	Herhangi bir değişken içeriğinin integer (tam sayı) veri türü değerini geriye döndürür.
	floatval()		:	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
	doubleval()		:	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
	*/

        $Deger                =    array("Volkan", 8);
        $DegerVeriTuru        =    gettype($Deger);

        echo "İçerik : <br /><pre>";
        print_r($Deger);
        echo "</pre>";
        echo "Veri Türü : " . $DegerVeriTuru . "<br /><br />";

        echo "<hr>";
        echo "<br>";

        echo "İçerik : " . boolval($Deger) . "<br />";
        $DegerVeriTuruSon    =    gettype($Deger);
        echo "Veri Türü : " . $DegerVeriTuruSon;
        ?>
    </div>
</body>

</html>