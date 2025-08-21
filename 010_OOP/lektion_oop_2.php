<!DOCTYPE html>
<html lang="en,de,tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <p>
    <pre>
1. Temel Konu (Grundlagen)
a) Kalıtım (Vererbung / Inheritance):
Kalıtım, bir sınıfın başka bir sınıfın tüm public özelliklerini ve metotlarını miras almasıdır. Bu, kod tekrarını önlemenin en güçlü yollarından biridir.

Analoji: Bir Computer sınıfımız var. Bir Laptop da aslında özel bir bilgisayardır. Bu durumda, Laptop sınıfı, Computer sınıfının sahip olduğu $CPU gibi tüm temel özellikleri ve starten() gibi metotları miras alabilir. Laptop sınıfı, bu mirasın üzerine kendine özgü yeni özellikler (örneğin $Display) ekleyebilir.

Ebeveyn Sınıf (Parent Class): Özelliklerini miras veren sınıftır (Computer).

Çocuk Sınıf (Child Class): Mirası alan sınıftır (Laptop). Bu işlem PHP'de extends anahtar kelimesi ile yapılır.
<hr>
    <br>
b) Kurucu Metot (__construct / Konstruktor):
Bir önceki dersimizde nesneyi önce boş oluşturup ($MeinComputer = new Computer();), sonra özelliklerini tek tek doldurmuştuk ($MeinComputer->CPU = "3 GHZ";). Bu biraz zahmetli.
__construct metodu, bir nesne new anahtar kelimesiyle oluşturulduğu anda otomatik olarak çalışan özel bir metottur. Bu sayede nesneyi oluştururken ona başlangıç değerlerini doğrudan verebiliriz.
Örnek: $MeinComputer = new Computer("4 GHZ", "16 GB");
<p>
    Kurze Zusammenfassung
1-) extends anahtar kelimesi ile sınıflar arasında bir "ebeveyn-çocuk" ilişkisi kurarak kod tekrarını önleriz.

2-) __construct metodu, new ile bir nesne oluşturulurken ona başlangıç değerleri atamamızı sağlar, bu da kodu daha temiz ve pratik hale getirir.

3-) Bir çocuk sınıf, ebeveyninden miras aldığı bir metodu aynı isimle yeniden yazarak kendi ihtiyacına göre geçersiz kılabilir (override).

4-) Bir çocuk sınıfın kurucu metodunda, parent::__construct() komutu ile ebeveyn sınıfın kurucu metodunu çağırarak temel kurulumu ona yaptırabiliriz.
</p>           
        </pre>
    </p>

    <?php


    // --- 1. EBEVEYN SINIF (PARENT CLASS) ----

    class Computer
    {

        public $CPU;
        public $RAM;

        // Kurucu Metot (Constructor): Nesne oluşurken çalışır ve başlangıç değerlerini atar.

        public function __construct($cpu_hizi, $ram_miktari)
        {
            $this->CPU = $cpu_hizi;
            $this->RAM = $ram_miktari;
            echo "<p>Bir Computer nesnesi oluşturuldu. CPU: {$this->CPU}, RAM: {$this->RAM}</p>";
        }
        public function starten()
        {
            return "Computer ist gestartet.";
        }
    }
    // --- 2. ÇOCUK SINIF (CHILD CLASS) ---
    // Laptop sınıfı, Computer sınıfının tüm public özellik ve metotlarını miras alır.

    class Laptop extends Computer
    {
        //Sadece Laptop'a ait yeni bir özellik
        public $Display = "15 Zoll";

        //Laptop sinifinin kendi kurucu konstraktor sinifi
        public function __construct($cpu_hizi, $ram_miktari, $ekran_boyutu)
        {
            // Önce ebeveyn sınıfın constructor'ını çağırarak temel özellikleri ayarlayalım.
            parent::__construct($cpu_hizi, $ram_miktari);

            //Sonra kendine özgü özelligini ayarlayalim.
            $this->Display = $ekran_boyutu;
            echo "<p>...ve bu Computer bir Laptop'muş! Ekran: {$this->Display}</p>";
        }

        //METHOD OVERRIDING ---> Yani ebeveydeki methodu gecersiz kilma

        public function starten()
        {
            return "Laptop ist gestartet!!!";
        }

        // ----------- 3. NESNELERI KULLANMA ---------------



    }

    //Yeni bir server sinifi olusturalim

    class Server extends Computer{
        //Sadece Server' a ait yeni bir özellik
        public $Harddisk ="256 GB"; //Varsayilan deger olarak atatdik eger deger atanmaz ise bu deger yazilir.

        // Server sinifinin kendi kurucu konstroktor sinifi
         public function __construct($cpu_hizi,$ram_miktari,$harddisk_kapasitesi){

            //Ebeveyn sinifi
            parent::__construct($cpu_hizi,$ram_miktari);

            $this->Harddisk=$harddisk_kapasitesi;
            echo "<p> Server kapasitesi: {$this->Harddisk}</p>";        
            
         }
         //Method Overriding
         public function starten()
         {
            return "Server ist gestartet!!!!";
         }
    }
    echo "<h2>Normal bir Computer oluşturalım:</h2>";

    $MasaustuPC = new Computer("4 GHZ", "16 GB");
    echo "<p>Durum: " . $MasaustuPC->starten() . "</p>";

    echo "<hr>";
    $SAitPC = new Computer("5 GHZ", "64 GB");
    echo "<p> Sait PC ".$SAitPC->starten(). "</p>";
    
    echo "<hr>";


    echo "<h2>Şimdi bir Laptop oluşturalım:</h2>";
    $MeinLaptop = new Laptop("5 GHZ", "32 GB", "17 Zoll");
    echo "<p>Laptop CPU: " . $MeinLaptop->CPU . "</p>"; // Miras alınan özellik
    echo "<p> Laptop RAM: ".$MeinLaptop ->RAM . "</p>";//Miras alinan özellik
    echo "<p>Laptop Ekran: " . $MeinLaptop->Display . "</p>"; // Kendi özelliği
    echo "<p>Durum: " . $MeinLaptop->starten() . "</p>"; // Geçersiz kılınan (override) metot

    echo "<hr>";


    echo "<h2>Şimdi bir Server oluşturalım:</h2>";
    $MeinServer = new Server("6 GHZ", "32 GB", "2 TB");
    echo "<p>Server CPU: " . $MeinServer->CPU . "</p>"; // Miras alınan özellik
    echo "<p>Server RAM: " . $MeinServer->RAM . "</p>"; // Miras alınan özellik
    echo "<p> Server Harddisk Boyutu: ". $MeinServer->Harddisk."</p>"; //kendi özelligi
    echo "<p>Durum: " . $MeinServer->starten() . "</p>"; // Geçersiz kılınan (override) metot




    ?>

</body>

</html>