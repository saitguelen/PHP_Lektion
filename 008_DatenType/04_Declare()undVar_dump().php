<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>PHP declare() ve var_dump()</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        pre { background-color: #f4f4f4; padding: 10px; border-radius: 5px; }
        .output { background-color: #e8f4f8; padding: 10px; border-radius: 5px; margin: 10px 0; }
        .section { margin: 20px 0; border: 1px solid #ddd; padding: 15px; border-radius: 5px; }
    </style>
</head>

<body>
    <h1>declare() ve var_dump() Fonksiyonları</h1>
    
    <pre>
/* 
declare() Direktifleri:
- strict_types     : Katı tip kontrolü (1 = aktif, 0 = pasif)
- ticks            : Script çalışırken belirli sayıda statement sonrası fonksiyon çağırma
- encoding         : Script dosyasının karakter kodlamasını belirtme
- declare(strict_types=1);seklinde kullanilir

var_dump():
- Değişkenin türü, boyutu ve içeriği hakkında detaylı bilgi verir
- Debugging (hata ayıklama) için çok kullanışlıdır
- Array ve object içeriklerini detaylı şekilde gösterir
*/
    </pre>
    
    <hr>
    
    <div class="section">
        <h2>1. strict_types ile Katı Tip Kontrolü</h2>
        <div class="output">
            <?php
            //declare(strict_types=1);
            
            echo "<h3>Strict Types Örneği:</h3>";
            
            function topla(int $a, int $b): int {
                return $a + $b;
            }
            
            try {
                $sonuc1 = topla(5, 3);
                echo "Integer toplama: " . $sonuc1 . "<br>";
                
                // Bu satır hata verecek çünkü strict_types=1
                // $sonuc2 = topla(5.5, 3.2);  // TypeError
                
            } catch (TypeError $e) {
                echo "Hata: " . $e->getMessage() . "<br>";
            }
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>2. var_dump() ile Değişken İnceleme</h2>
        <div class="output">
            <?php
            echo "<h3>Farklı Veri Türleri:</h3>";
            
            // String
            $metin = "Merhaba Dünya";
            echo "<strong>String:</strong><br>";
            var_dump($metin);
            echo "<br><br>";
            
            // Integer
            $sayi = 42;
            echo "<strong>Integer:</strong><br>";
            var_dump($sayi);
            echo "<br><br>";
            
            // Float
            $ondalik = 3.14159;
            echo "<strong>Float:</strong><br>";
            var_dump($ondalik);
            echo "<br><br>";
            
            // Boolean
            $dogru = true;
            $yanlis = false;
            echo "<strong>Boolean:</strong><br>";
            var_dump($dogru, $yanlis);
            echo "<br><br>";
            
            // Array
            $dizi = ["elma", "armut", "muz", 123, true];
            echo "<strong>Array:</strong><br>";
            var_dump($dizi);
            echo "<br><br>";
            
            // Null
            $bos = null;
            echo "<strong>Null:</strong><br>";
            var_dump($bos);
            echo "<br><br>";
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>3. Object ile var_dump()</h2>
        <div class="output">
            <?php
            echo "<h3>Object İnceleme:</h3>";
            
            class Kisi {
                public $ad = "Ahmet";
                private $yas = 25;
                protected $sehir = "İstanbul";
                
                public function selamVer() {
                    return "Merhaba!";
                }
            }
            
            $kisi = new Kisi();
            var_dump($kisi);
            echo "<br><br>";
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>4. Ticks ile Declare</h2>
        <div class="output">
            <?php
            echo "<h3>Ticks Örneği:</h3>";
            
            function sayac() {
                static $count = 0;
                $count++;
                echo "Tick sayısı: " . $count . "<br>";
            }
            
            register_tick_function('sayac');
            
            declare(ticks=2) {
                $a = 1;          // 1. statement
                $b = 2;          // 2. statement - tick çağrılır
                $c = $a + $b;    // 3. statement  
                $d = $c * 2;     // 4. statement - tick çağrılır
                echo "Sonuç: " . $d . "<br>";
            }
            
            unregister_tick_function('sayac');
            ?>
        </div>
    </div>
    
    <div class="section">
        <h2>5. Karşılaştırma: var_dump() vs print_r() vs var_export()</h2>
        <div class="output">
            <?php
            echo "<h3>Farklı Debug Fonksiyonları:</h3>";
            
            $ornekDizi = [
                "ad" => "Mehmet",
                "yas" => 30,
                "hobiler" => ["okuma", "yüzme", "kod yazma"],
                "aktif" => true
            ];
            
            echo "<strong>var_dump():</strong><br>";
            var_dump($ornekDizi);
            echo "<br><br>";
            
            echo "<strong>print_r():</strong><br>";
            echo "<pre>";
            print_r($ornekDizi);
            echo "</pre><br>";
            
            echo "<strong>var_export():</strong><br>";
            echo "<pre>";
            var_export($ornekDizi);
            echo "</pre><br>";
            ?>
        </div>
    </div>

</body>
</html>