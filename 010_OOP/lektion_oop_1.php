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
    <h1>Lektion 1 - Sınıf Tanımlama</h1>

    <p><strong>a) Neden OOP'ye İhtiyacımız Var?</strong><br>
        Şimdiye kadar yazdığımız projede, kullanıcıyla ilgili işlemler login.php, register.php, edit_user.php gibi farklı dosyalara dağılmış durumda.<br>
        Proje büyüdükçe bu dağınıklığı yönetmek zorlaşır. OOP, birbiriyle ilişkili verileri (değişkenleri) ve bu veriler üzerinde çalışan fonksiyonları<br>
        tek bir "paket" içinde toplamamızı sağlar. Bu sayede kodumuz daha düzenli, anlaşılır ve yeniden kullanılabilir hale gelir.
    </p>

    <hr>

    <p><strong>b) Sınıf (Class) ve Nesne (Object) Nedir?</strong><br>
        Bu iki kavramı anlamak için basit bir analoji kullanalım: <strong>Bir Bilgisayar</strong>.
    </p>

    <p><strong>Sınıf (Class):</strong> Bir bilgisayarın teknik çizimidir (Bauplan). Bu çizimde bilgisayarın ne gibi özelliklere sahip olacağı (İşlemci hızı, RAM miktarı) ve
        ne gibi eylemler yapabileceği (başlat(), kapat()) tanımlanır. Sınıf, soyut bir şablondur; tek başına elle tutulur bir bilgisayar değildir.
    </p>

    <p><strong>Nesne (Object):</strong> O teknik çizimden yola çıkılarak üretilmiş gerçek, çalışan bir bilgisayardır. Fabrikadan çıkan her bir bilgisayar,
        aynı teknik çizime (sınıfa) sahip olsa da, birbirinden bağımsız nesnelerdir. Senin bilgisayarın ($SaitinBilgisayari) açıkken,
        benimki ($GemininBilgisayari) kapalı olabilir. İkisi de aynı plandan üretilmiş ama bağımsız varlıklardır.
    </p>

    <p>PHP'de bu şöyledir:<br>
        <code>class Computer { ... }</code> diyerek bir bilgisayarın planını çizeriz.<br>
        <code>$MeinComputer = new Computer();</code> diyerek o plandan "MeinComputer" adında gerçek, canlı bir nesne üretiriz.
    </p>

    <hr>

    <p><strong>c) Özellikler (Properties) ve Metotlar (Methods):</strong></p>
    <p><strong>Özellikler (Eigenschaften / Properties):</strong> Bir sınıfın sahip olduğu değişkenlerdir. Bilgisayar örneğindeki $CPU, $RAM gibi.</p>
    <p><strong>Metotlar (Methoden / Methods):</strong> Bir sınıfın yapabildiği eylemlerdir, yani sınıfın içindeki fonksiyonlardır. Bilgisayar örneğindeki starten(), herunterfahren() gibi.</p>

    <hr>

    <h3>Kurze Zusammenfassung</h3>
    <ol>
        <li>OOP, büyüyen projelerde kodu düzenli ve yönetilebilir tutmak için kullanılır.</li>
        <li>Sınıf (Class) bir plandır, Nesne (Object) ise o plandan üretilmiş gerçek bir örnektir.</li>
        <li>Sınıflar, verileri saklamak için Özelliklere (Properties) ve eylemleri gerçekleştirmek için Metotlara (Methods) sahiptir.</li>
        <li><code>new</code> anahtar kelimesi ile bir sınıftan yeni bir nesne oluştururuz.</li>
        <li><code>-></code> operatörünü kullanarak bir nesnenin özelliklerine ve metotlarına erişiriz.</li>
    </ol>

    <hr>

    <h2>Praktisches Beispiel:</h2>

    <?php
    // --- 1. SINIF TANIMLAMA (Bilgisayar Planı) ---
    class Computer
    {
        // Özellikler (Properties)
        // public: Bu özelliğe hem sınıfın içinden hem de dışından erişilebilir demektir.
        public $CPU = "Bilinmeyen CPU"; // Varsayılan değer
        public $RAM = "Bilinmeyen RAM"; // Varsayılan değer

        // Metotlar (Methods)
        public function starten()
        {
            // Bu method çağrıldığında ekrana bir mesaj yazar
            echo "Computer gestartet!";
        }

        public function finish()
        {
            echo "Rechner ist heruntergefahren!";
        }
    }

    // --- 2. SINIFTAN NESNE ÜRETME (Gerçek Bilgisayar) ---
    echo "<div class='code-output'>";
    echo "<h3>2. Sınıftan Nesne Üretme:</h3>";
    echo "<pre>\$MeinComputer = new Computer();</pre>";

    $MeinComputer = new Computer();
    echo "<p>✅ Yeni bir Computer nesnesi oluşturuldu!</p>";
    echo "</div>";

    // --- 3. NESNENİN ÖZELLİKLERİNE ERİŞME VE DEĞİŞTİRME ---
    echo "<div class='code-output'>";
    echo "<h3>3. Nesnenin Özelliklerine Erişme:</h3>";

    echo "<p><strong>Başlangıçtaki değerler:</strong></p>";
    echo "<p>CPU: " . $MeinComputer->CPU . "</p>";
    echo "<p>RAM: " . $MeinComputer->RAM . "</p>";

    echo "<p><strong>Özellikleri değiştirelim:</strong></p>";
    $MeinComputer->CPU = "Intel i7 3.4 GHz";
    $MeinComputer->RAM = "32 GB DDR4";

    echo "<p>Yeni CPU: " . $MeinComputer->CPU . "</p>";
    echo "<p>Yeni RAM: " . $MeinComputer->RAM . "</p>";
    echo "</div>";

    // --- 4. NESNENİN METODUNU ÇAĞIRMA ---
    echo "<div class='code-output'>";
    echo "<h3>4. Nesnenin Metotlarını Çağırma:</h3>";

    echo "<p>Bilgisayarı başlatıyoruz: ";
    $MeinComputer->starten();
    echo "</p>";

    echo "<p>Bilgisayarı kapatıyoruz: ";
    $MeinComputer->finish();
    echo "</p>";
    echo "</div>";

    // --- 5. BONUS: BAŞKA BİR NESNE OLUŞTURALIM ---
    echo "<div class='code-output'>";
    echo "<h3>5. Bonus - İkinci Bir Nesne:</h3>";
    echo "<p>Aynı sınıftan başka bir nesne oluşturabiliriz:</p>";

    $DeinComputer = new Computer();
    $DeinComputer->CPU = "AMD Ryzen 5";
    $DeinComputer->RAM = "16 GB DDR4";

    echo "<p><strong>İkinci bilgisayarın özellikleri:</strong></p>";
    echo "<p>CPU: " . $DeinComputer->CPU . "</p>";
    echo "<p>RAM: " . $DeinComputer->RAM . "</p>";

    echo "<p><strong>İki nesne bağımsızdır:</strong></p>";
    echo "<p>MeinComputer CPU: " . $MeinComputer->CPU . "</p>";
    echo "<p>DeinComputer CPU: " . $DeinComputer->CPU . "</p>";
    echo "</div>";
    ?>

    <hr>
    <h3>🎯 Önemli Notlar:</h3>
    <ul>
        <li><code>class</code> anahtar kelimesi ile sınıf tanımlanır</li>
        <li><code>public</code> erişim belirleyicisi - özelliğe her yerden erişim</li>
        <li><code>new</code> operatörü ile nesne oluşturulur</li>
        <li><code>-></code> nesne operatörü ile özelliklere ve metotlara erişilir</li>
        <li>Her nesne bağımsızdır - birinin değişmesi diğerini etkilemez</li>
    </ul>

</body>

</html>