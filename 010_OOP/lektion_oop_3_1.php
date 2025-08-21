<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Ders 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            background-color: #f9f9f9;
        }

        h1 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 15px;
            border-left: 4px solid #007cba;
            overflow-x: auto;
            border-radius: 5px;
            margin: 15px 0;
        }

        .code-output {
            background-color: #e8f6f3;
            padding: 15px;
            border: 1px solid #16a085;
            margin: 10px 0;
            border-radius: 5px;
        }

        .example-box {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .success {
            color: #27ae60;
            font-weight: bold;
        }

        .error {
            color: #e74c3c;
            font-weight: bold;
        }

        .info {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        code {
            background-color: #f1f2f6;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <h1>OOP Ders 3: Erişim Belirleyiciler (public, private, protected)</h1>

    <div class="info">
        <h2>🎯 Temel Konu (Grundlagen)</h2>
        <p>Erişim belirleyiciler, bir sınıfın özelliklerine ve metotlarına kimlerin erişebileceğini belirleyen anahtar kelimelerdir. Üç temel belirleyici vardır:</p>
    </div>

    <pre>
<strong>🟢 public (Herkese Açık):</strong> 
Bir özellik veya metot public ise, ona her yerden (sınıfın içinden, dışından, alt sınıflardan) erişilebilir. 
Şimdiye kadar hep bunu kullandık.

<strong>🔴 private (Özel):</strong> 
Bir özellik veya metot private ise, ona sadece tanımlandığı sınıfın içinden erişilebilir. 
Sınıfın dışından veya onu miras alan bir alt sınıftan erişmeye çalışmak hataya (Fatal Error) neden olur. 
Bu, bir nesnenin iç yapısını korumak ve dışarıdan gelebilecek istenmeyen değişiklikleri engellemek için çok önemlidir.

<strong>🟡 protected (Korumalı):</strong> 
Bu, public ile private arasında bir seviyedir. protected bir özelliğe veya metoda, tanımlandığı sınıfın içinden 
VE o sınıfı extends eden çocuk sınıfların içinden erişilebilir. Ancak sınıfın tamamen dışından erişilemez.
</pre>

    <div class="example-box">
        <h3>📊 Analoji: Bir Şirket</h3>
        <ul>
            <li><strong>public:</strong> Şirketin halka açık telefon numarası. Herkes arayabilir.</li>
            <li><strong>protected:</strong> Şirketin departman içi toplantı odası. Sadece o şirketin çalışanları (sınıf ve alt sınıfları) girebilir.</li>
            <li><strong>private:</strong> CEO'nun kişisel kasasının şifresi. Sadece CEO'nun kendisi (sadece o sınıfın içi) bilir ve erişebilir.</li>
        </ul>
    </div>

    <h2>💻 Praktisches Beispiel:</h2>

    <?php
    // ------ 1. KLASSE MIT NEUEN ZUGANGSKENNZEICHEN DEFINIEREN ------
    
    class Computer
    {
        // Bu özellik public - herkes erişebilir ve değiştirebilir
        public $monitorMarkasi = "Bilinmiyor";

        // Bu özellikler private - sadece bu sınıfın metotları erişebilir
        private $seriNumarasi;
        private $macAdresi;

        // Konstruktor
        public function __construct()
        {
            // Private olan seri numarasını ve MAC adresini, sınıfın kendi içinde oluşturalım
            // Dışarıdan kimse bunu değiştiremez
            $this->seriNumarasi = "TR-" . rand(100000, 999999);
            $this->macAdresi = "INT-" . rand(10000, 99999);
        }

        // GETTER METOTLARI - Private özellikleri okumak için
        public function getSeriNumarasi()
        {
            return $this->seriNumarasi;
        }

        public function getMacAdresi()
        {
            return $this->macAdresi;
        }

        // SETTER METOTLARI - Private özellikleri kontrollü şekilde değiştirmek için
        public function setSeriNumarasi($yeniSeriNo)
        {
            // Sadece "TR-" ile başlıyorsa kabul et
            if (strpos($yeniSeriNo, "TR-") === 0) {
                $this->seriNumarasi = $yeniSeriNo;
                return true;
            }
            return false;
        }

        public function setMacAdresi($yeniMacNo)
        {
            // Sadece "INT-" ile başlıyorsa kabul et
            if (strpos($yeniMacNo, "INT-") === 0) {
                $this->macAdresi = $yeniMacNo;
                return true;
            }
            return false;
        }
    }

    // ------ 2. NESNEYİ KULLANALIM ------
    echo "<div class='code-output'>";
    echo "<h3>🖥️ Computer Nesnesi Oluşturma</h3>";
    
    $MasaustuPC = new Computer();
    echo "<p>✅ Yeni Computer nesnesi oluşturuldu!</p>";
    echo "</div>";

    // PUBLIC ÖZELLİK KULLANIMI
    echo "<div class='code-output'>";
    echo "<h3>🟢 Public Özellik Kullanımı</h3>";
    echo "<p>Monitör (önce): <strong>" . $MasaustuPC->monitorMarkasi . "</strong></p>";
    
    $MasaustuPC->monitorMarkasi = "Samsung 27\" 4K";
    echo "<p>Monitör (sonra): <strong>" . $MasaustuPC->monitorMarkasi . "</strong></p>";
    echo "<p class='success'>✅ Public özellik başarıyla değiştirildi!</p>";
    echo "</div>";

    // PRIVATE ÖZELLİKLERE GETTER İLE ERİŞİM
    echo "<div class='code-output'>";
    echo "<h3>🔴 Private Özelliklere Getter ile Erişim</h3>";
    echo "<p>Seri Numarası: <strong>" . $MasaustuPC->getSeriNumarasi() . "</strong></p>";
    echo "<p>Mac Adresi: <strong>" . $MasaustuPC->getMacAdresi() . "</strong></p>";
    echo "<p class='success'>✅ Private özelliklere getter metotları ile başarıyla erişildi!</p>";
    echo "</div>";

    // HATA ÖRNEĞİ (Yorumlu)
    echo "<div class='code-output'>";
    echo "<h3>❌ Private Özelliğe Doğrudan Erişim Hatası</h3>";
    echo "<pre><code>// echo \$MasaustuPC->seriNumarasi; // Fatal Error!</code></pre>";
    echo "<p class='error'>⚠️ Bu satırın yorumu kaldırılırsa Fatal Error alınır!</p>";
    echo "<p>Private özelliklere doğrudan erişim mümkün değildir.</p>";
    echo "</div>";

    // SETTER METOTLARI İLE KONTROLLÜ DEĞİŞTİRME
    echo "<div class='code-output'>";
    echo "<h3>🔧 Setter Metotları ile Kontrollü Değiştirme</h3>";
    
    // Başarısız deneme
    echo "<h4>❌ Başarısız Deneme:</h4>";
    $sonuc1 = $MasaustuPC->setSeriNumarasi("DE-12345");
    echo "<p>setSeriNumarasi('DE-12345') sonucu: <span class='error'>" . ($sonuc1 ? "Başarılı" : "Başarısız") . "</span></p>";
    echo "<p>Seri Numarası: <strong>" . $MasaustuPC->getSeriNumarasi() . "</strong></p>";
    echo "<p class='error'>❌ 'DE-' ile başladığı için reddedildi!</p>";

    $sonuc2 = $MasaustuPC->setMacAdresi("DE-98765");
    echo "<p>setMacAdresi('DE-98765') sonucu: <span class='error'>" . ($sonuc2 ? "Başarılı" : "Başarısız") . "</span></p>";
    echo "<p>Mac Adresi: <strong>" . $MasaustuPC->getMacAdresi() . "</strong></p>";
    echo "<p class='error'>❌ 'INT-' ile başlamadığı için reddedildi!</p>";

    echo "<hr>";
    
    // Başarılı deneme
    echo "<h4>✅ Başarılı Deneme:</h4>";
    $sonuc3 = $MasaustuPC->setSeriNumarasi("TR-987654");
    echo "<p>setSeriNumarasi('TR-987654') sonucu: <span class='success'>" . ($sonuc3 ? "Başarılı" : "Başarısız") . "</span></p>";
    echo "<p>Seri Numarası: <strong>" . $MasaustuPC->getSeriNumarasi() . "</strong></p>";
    echo "<p class='success'>✅ 'TR-' ile başladığı için kabul edildi!</p>";

    $sonuc4 = $MasaustuPC->setMacAdresi("INT-925648");
    echo "<p>setMacAdresi('INT-925648') sonucu: <span class='success'>" . ($sonuc4 ? "Başarılı" : "Başarısız") . "</span></p>";
    echo "<p>Mac Adresi: <strong>" . $MasaustuPC->getMacAdresi() . "</strong></p>";
    echo "<p class='success'>✅ 'INT-' ile başladığı için kabul edildi!</p>";
    
    echo "</div>";
    ?>

    <div class="info">
        <h3>📋 Kurze Zusammenfassung</h3>
        <ol>
            <li><strong>public, private ve protected</strong> erişim belirleyicileri, OOP'de kod güvenliği ve organizasyonu için temel araçlardır.</li>
            <li><strong>Verilerin bütünlüğünü korumak</strong> ve istenmeyen değişiklikleri engellemek için özellikleri genellikle <code>private</code> yaparız.</li>
            <li>Bu private özelliklere kontrollü bir şekilde erişmek ve onları değiştirmek için <code>public</code> <strong>"Getter"</strong> (get...) ve <strong>"Setter"</strong> (set...) metotları yazarız.</li>
            <li>Bu yaklaşıma <strong>Kapsülleme (Encapsulation)</strong> denir ve iyi bir OOP tasarımının temelini oluşturur.</li>
        </ol>
    </div>

    <div class="example-box">
        <h3>🎯 Önemli Notlar:</h3>
        <ul>
            <li><code>private</code> özelliklere doğrudan erişim <strong>Fatal Error</strong> verir</li>
            <li><code>Getter</code> metotları private özellikleri <strong>okumak</strong> için kullanılır</li>
            <li><code>Setter</code> metotları private özellikleri <strong>kontrollü şekilde değiştirmek</strong> için kullanılır</li>
            <li>Setter metotlarında <strong>validasyon</strong> (doğrulama) kuralları ekleyebiliriz</li>
            <li>Bu yaklaşım <strong>veri güvenliği</strong> ve <strong>kod kalitesi</strong> açısından çok önemlidir</li>
        </ul>
    </div>

</body>

</html>