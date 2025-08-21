<!DOCTYPE html>
<html lang="tr,de,en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Lektion 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-left: 4px solid #007cba;
            overflow-x: auto;
        }

        .code-output {
            background-color: #eff2f5ff;
            padding: 10px;
            border: 1px solid #b3d9ff;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1>OOP Ders 3: Erişim Belirleyiciler (public, private, protected)</h1>
    <p>
    <pre>
1. Temel Konu (Grundlagen)
Erişim belirleyiciler, bir sınıfın özelliklerine ve metotlarına kimlerin erişebileceğini belirleyen anahtar kelimelerdir. Üç temel belirleyici vardır:

public (Herkese Açık): Bir özellik veya metot public ise, ona her yerden (sınıfın içinden, dışından, alt sınıflardan) erişilebilir. Şimdiye kadar hep bunu kullandık.

private (Özel): Bir özellik veya metot private ise, ona sadece tanımlandığı sınıfın içinden erişilebilir. Sınıfın dışından veya onu miras alan bir alt sınıftan erişmeye çalışmak hataya (Fatal Error) neden olur. Bu, bir nesnenin iç yapısını korumak ve dışarıdan gelebilecek istenmeyen değişiklikleri engellemek için çok önemlidir.

protected (Korumalı): Bu, public ile private arasında bir seviyedir. protected bir özelliğe veya metoda, tanımlandığı sınıfın içinden VE o sınıfı extends eden çocuk sınıfların içinden erişilebilir. Ancak sınıfın tamamen dışından erişilemez.

Analoji: Bir şirket düşünelim.

public: Şirketin halka açık telefon numarası. Herkes arayabilir.

protected: Şirketin departman içi toplantı odası. Sadece o şirketin çalışanları (sınıf ve alt sınıfları) girebilir.

private: CEO'nun kişisel kasasının şifresi. Sadece CEO'nun kendisi (sadece o sınıfın içi) bilir ve erişebilir.
<p>
    Kurze Zusammenfassung
        1- public, private ve protected erişim belirleyicileri, OOP'de kod güvenliği ve organizasyonu için temel araçlardır.

        2- Verilerin bütünlüğünü korumak ve istenmeyen değişiklikleri engellemek için özellikleri genellikle private yaparız.

        3- Bu private özelliklere kontrollü bir şekilde erişmek ve onları değiştirmek için public "Getter" (get...) ve "Setter" (set...) metotları yazarız.

Bu yaklaşıma Kapsülleme (Encapsulation) denir ve iyi bir OOP tasarımının temelini oluşturur.
</p>

        </pre>
    </p>
    <?php

    // ------1.----KLASSE  MIT NEUEN ZUGANGSKENNZEICHEN DEFINIEREN

    class Computer
    {
        //Bu özellik public herkes erisbilir ve degistirebilir
        public $monitorMarkasi = "Bilinmiyor";

        //Bu özellik private, sadece bu sinifin metotlari erisebilir.

        private $seriNumarasi;
        private $macAdresi;

        //Konstraktor
        public function __construct()
        {
            // Private olan seri numarasını, sınıfın kendi içinde oluşturalım.
            // Dışarıdan kimse bunu değiştiremez.

            $this->seriNumarasi = "TR-" . rand(100000, 999999);
            $this->macAdresi = "INT-" . rand(10000, 99999);
        }
        // Bu public metot, private olan seri numarasına erişip
        // onu dışarıya güvenli bir şekilde "okunabilir" olarak sunar.

        public function getSeriNumarasi()
        {
            return $this->seriNumarasi;
        }
        public function getMacAdresi()
        {
            return $this->macAdresi;
        }
        // Bu public metot, private olan seri numarasını 
        // belirli kurallar dahilinde değiştirmemize olanak tanır.
        public function setSeriNumarasi($yeniSeriNo)
        {
            // Sadece "TR-" ile başlıyorsa kabul et gibi bir kural koyabiliriz.
            if (strpos($yeniSeriNo, "TR-") === 0) {
                $this->seriNumarasi = $yeniSeriNo;
                return true;
            }
            return false;
        }
        public function setMacAdresi($yeniMacNo)
        {
            // Sadece "TR-" ile başlıyorsa kabul et gibi bir kural koyabiliriz.
            if (strpos($yeniMacNo, "INT-") === 0) {
                $this->macAdresi = $yeniMacNo;
                return true;
            }
            return false;
        }
    }
    // --- 2. NESNEYİ KULLANALIM ---
    $MasaustuPC = new Computer();

    // Public özelliğe doğrudan erişip değiştirebiliriz.
    echo "<p>Monitör (önce): " . $MasaustuPC->monitorMarkasi . "</p>";
    $MasaustuPC->monitorMarkasi = "Samsung";
    echo "<p>Monitör (sonra): " . $MasaustuPC->monitorMarkasi . "</p>";

    echo "<hr>";
    // Private özelliğe public metot üzerinden GÜVENLİ bir şekilde erişelim (sadece okuma).
    echo "<p>Seri Numarası: " . $MasaustuPC->getSeriNumarasi() . "</p>";
    echo "<p> Mac Adresi: ".$MasaustuPC->getMacAdresi(). "</p>";

    // Private özelliğe doğrudan erişmeye çalışalım.
    // Aşağıdaki satırın başındaki yorumu kaldırırsan "Fatal error" alırsın!
    // echo $MasaustuPC->seriNumarasi; 

    // Private özelliği public metot üzerinden GÜVENLİ bir şekilde değiştirmeye çalışalım.
    $MasaustuPC->setSeriNumarasi("DE-12345"); // Bu başarısız olacak.
    echo "<p>Seri Numarası (değiştirme denemesi sonrası): " . $MasaustuPC->getSeriNumarasi() . "</p>";

    $MasaustuPC->setMacAdresi("DE-98765"); // Bu başarılı olacak.
    echo "<p>Mac Adresi ( değiştirme denemesi sonrası): " . $MasaustuPC->getMacAdresi() . "</p>";
    

    $MasaustuPC->setSeriNumarasi("TR-98765"); // Bu başarılı olacak.
    echo "<p>Seri Numarası (başarılı değiştirme sonrası): " . $MasaustuPC->getSeriNumarasi() . "</p>";

    $MasaustuPC->setMacAdresi("INT-925648"); // Bu başarılı olacak.
    echo "<p>Mac Adresi (başarılı değiştirme sonrası): " . $MasaustuPC->getMacAdresi() . "</p>";




    ?>



</body>

</html>