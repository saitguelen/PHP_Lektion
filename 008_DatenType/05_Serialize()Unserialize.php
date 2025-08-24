<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>PHP serialize() ve unserialize()</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        pre { background-color: #f4f4f4; padding: 10px; border-radius: 5px; overflow-x: auto; }
        .output { background-color: #e8f4f8; padding: 10px; border-radius: 5px; margin: 10px 0; }
        .section { margin: 20px 0; border: 1px solid #ddd; padding: 15px; border-radius: 5px; }
        .serialized { background-color: #fff3cd; padding: 5px; border-radius: 3px; font-family: monospace; }
    </style>
</head>

<body>
    <h1>serialize() ve unserialize() Fonksiyonları</h1>
    
    <pre>
/* 
serialize():
- PHP değişkenlerini string formatına çevirir
- Veri saklama, dosyaya yazma, veritabanına kaydetme için kullanılır
- Array, object, primitive türler serialize edilebilir
- Veri transferi ve session yönetimi için önemli

unserialize():
- Serialize edilmiş string'i tekrar PHP değişkenine çevirir
- Orijinal veri türü ve yapısı korunur
- Güvenlik açısından dikkatli kullanılmalıdır
- Class'lar için autoload gerekebilir
*/
    </pre>
    
    <hr>
    
    <div class="section">
        <h2>1. Temel Veri Türleri ile Serialize</h2>
        <div class="output">
            <?php
            echo "<h3>Primitive Türler:</h3>";
            
            // String
            $metin = "Merhaba PHP!";
            $metin_serialized = serialize($metin);
            echo "<strong>String:</strong><br>";
            echo "Orijinal: " . $metin . "<br>";
            echo "Serialize: <span class='serialized'>" . $metin_serialized . "</span><br>";
            echo "Unserialize: " . unserialize($metin_serialized) . "<br><br>";
            
            // Integer
            $sayi = 12345;
            $sayi_serialized = serialize($sayi);
            echo "<strong>Integer:</strong><br>";
            echo "Orijinal: " . $sayi . "<br>";
            echo "Serialize: <span class='serialized'>" . $sayi_serialized . "</span><br>";
            echo "Unserialize: " . unserialize($sayi_serialized) . "<br><br>";
            
            // Float
            $ondalik = 3.14159;
            $ondalik_serialized = serialize($ondalik);
            echo "<strong>Float:</strong><br>";
            echo "Orijinal: " . $ondalik . "<br>";
            echo "Serialize: <span class='serialized'>" . $ondalik_serialized . "</span><br>";
            echo "Unserialize: " . unserialize($ondalik_serialized) . "<br><br>";
            
            // Boolean
            $dogru = true;
            $dogru_serialized = serialize($dogru);
            echo "<strong>Boolean:</strong><br>";
            echo "Orijinal: " . ($dogru ? 'true' : 'false') . "<br>";
            echo "Serialize: <span class='serialized'>" . $dogru_serialized . "</span><br>";
            echo "Unserialize: " . (unserialize($dogru_serialized) ? 'true' : 'false') . "<br><br>";
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>2. Array Serialize İşlemleri</h2>
        <div class="output">
            <?php
            echo "<h3>Array Örnekleri:</h3>";
            
            // Basit array
            $basitDizi = ["elma", "armut", "muz", "çilek"];
            $basitDizi_serialized = serialize($basitDizi);
            echo "<strong>Basit Array:</strong><br>";
            echo "Orijinal: ";
            print_r($basitDizi);
            echo "Serialize: <span class='serialized'>" . $basitDizi_serialized . "</span><br>";
            echo "Unserialize: ";
            print_r(unserialize($basitDizi_serialized));
            echo "<br>";
            
            // Associative array
            $kisiDizi = [
                "ad" => "Ayşe",
                "soyad" => "Yılmaz", 
                "yas" => 28,
                "sehir" => "Ankara",
                "hobiler" => ["kitap okuma", "sinema", "spor"]
            ];
            $kisiDizi_serialized = serialize($kisiDizi);
            echo "<strong>Associative Array:</strong><br>";
            echo "Orijinal: ";
            print_r($kisiDizi);
            echo "Serialize: <span class='serialized'>" . substr($kisiDizi_serialized, 0, 100) . "...</span><br>";
            echo "Unserialize: ";
            print_r(unserialize($kisiDizi_serialized));
            echo "<br>";
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>3. Object Serialize İşlemleri</h2>
        <div class="output">
            <?php
            echo "<h3>Class ve Object:</h3>";
            
            class Araba {
                public $marka;
                public $model;
                private $fiyat;
                protected $renk;
                
                public function __construct($marka, $model, $fiyat, $renk) {
                    $this->marka = $marka;
                    $this->model = $model;
                    $this->fiyat = $fiyat;
                    $this->renk = $renk;
                }
                
                public function bilgiVer() {
                    return $this->marka . " " . $this->model;
                }
                
                // Serialize edilirken çağrılır
                public function __sleep() {
                    echo "Object serialize ediliyor...<br>";
                    return ['marka', 'model', 'fiyat', 'renk'];
                }
                
                // Unserialize edilirken çağrılır
                public function __wakeup() {
                    echo "Object geri yüklendi!<br>";
                }
            }
            
            $araba = new Araba("Toyota", "Corolla", 150000, "Beyaz");
            echo "<strong>Orijinal Object:</strong><br>";
            var_dump($araba);
            echo "<br>";
            
            $araba_serialized = serialize($araba);
            echo "<strong>Serialize:</strong><br>";
            echo "<span class='serialized'>" . substr($araba_serialized, 0, 200) . "...</span><br><br>";
            
            $araba_restored = unserialize($araba_serialized);
            echo "<strong>Unserialize:</strong><br>";
            var_dump($araba_restored);
            echo "Metod çağrısı: " . $araba_restored->bilgiVer() . "<br><br>";
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>4. Session ve Dosya İşlemleri</h2>
        <div class="output">
            <?php
            echo "<h3>Pratik Kullanım Alanları:</h3>";
            
            // Session benzetimi
            $kullaniciBilgi = [
                "id" => 123,
                "kullanici_adi" => "ahmet_user",
                "email" => "ahmet@example.com",
                "son_giris" => date('Y-m-d H:i:s'),
                "yetkiler" => ["okuma", "yazma"]
            ];
            
            echo "<strong>Session Veri Saklama:</strong><br>";
            $session_data = serialize($kullaniciBilgi);
            echo "Session'da saklanacak veri boyutu: " . strlen($session_data) . " byte<br>";
            echo "Serialize veri: <span class='serialized'>" . substr($session_data, 0, 100) . "...</span><br>";
            
            // Veriyi geri yükle
            $restored_session = unserialize($session_data);
            echo "Geri yüklenen kullanıcı: " . $restored_session['kullanici_adi'] . "<br>";
            echo "Son giriş: " . $restored_session['son_giris'] . "<br><br>";
            
            // Dosyaya yazma örneği
            $dosya_adi = "kullanici_data.txt";
            echo "<strong>Dosya İşlemleri:</strong><br>";
            echo "Veri dosyaya yazıldı (benzetim): " . $dosya_adi . "<br>";
            echo "Dosya içeriği serialize formatında saklanır.<br><br>";
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>5. Güvenlik ve Performans</h2>
        <div class="output">
            <?php
            echo "<h3>Güvenlik Önlemleri:</h3>";
            
            // Güvenli unserialize
            $guvenli_dizi = ["test" => "veri", "sayi" => 42];
            $serialized = serialize($guvenli_dizi);
            
            echo "<strong>Güvenli Unserialize:</strong><br>";
            try {
                // Sadece array'ler kabul et
                $options = ['allowed_classes' => false];
                $result = unserialize($serialized, $options);
                echo "Güvenli şekilde unserialize edildi:<br>";
                print_r($result);
            } catch (Exception $e) {
                echo "Hata: " . $e->getMessage() . "<br>";
            }
            
            echo "<br><strong>Performans Karşılaştırması:</strong><br>";
            $buyuk_dizi = range(1, 1000);
            
            $start_time = microtime(true);
            $serialized_data = serialize($buyuk_dizi);
            $serialize_time = microtime(true) - $start_time;
            
            $start_time = microtime(true);
            $unserialized_data = unserialize($serialized_data);
            $unserialize_time = microtime(true) - $start_time;
            
            echo "1000 elemanlı dizi için:<br>";
            echo "Serialize süresi: " . round($serialize_time * 1000, 4) . " ms<br>";
            echo "Unserialize süresi: " . round($unserialize_time * 1000, 4) . " ms<br>";
            echo "Serialize veri boyutu: " . strlen($serialized_data) . " byte<br>";
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>6. Alternatif Yöntemler</h2>
        <div class="output">
            <?php
            echo "<h3>JSON ile Karşılaştırma:</h3>";
            
            $veri = [
                "ad" => "Test",
                "sayi" => 123,
                "dizi" => [1, 2, 3],
                "bool" => true
            ];
            
            // Serialize
            $serialized = serialize($veri);
            echo "<strong>PHP Serialize:</strong><br>";
            echo "Boyut: " . strlen($serialized) . " byte<br>";
            echo "Veri: <span class='serialized'>" . $serialized . "</span><br><br>";
            
            // JSON
            $json = json_encode($veri);
            echo "<strong>JSON Format:</strong><br>";
            echo "Boyut: " . strlen($json) . " byte<br>";
            echo "Veri: <span class='serialized'>" . $json . "</span><br><br>";
            
            echo "<strong>Kullanım Alanları:</strong><br>";
            echo "• PHP Serialize: PHP-PHP arası veri transferi, session<br>";
            echo "• JSON: Web API'lar, JavaScript ile veri paylaşımı<br>";
            echo "• XML: Yapılandırılmış dökümanlar, web servisleri<br>";
            ?>
        </div>
    </div>

</body>
</html>