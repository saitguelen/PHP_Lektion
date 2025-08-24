<!DOCTYPE html>
<html lang="en,tr,de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sait PHP</title>
</head>

<body>
    <h1>OOP Ders 5: Soyut Sınıflar (abstract) ve Arayüzler (interface)</h1>
    <p>
    <pre>
1. Grundlagen
a) Soyut Sınıf (Abstract Class):
Bu, tamamlanmamış bir sınıf şablonudur. Bazı metotları tamamlanmıştır, bazıları ise boştur ve 
"bu sınıfı miras alan herkes bu boş metotları doldurmak zorundadır" der.

Kurallar:

Soyut bir sınıftan doğrudan new ile bir nesne oluşturulamaz.

Bir sınıf, soyut bir sınıfı extends ettiğinde, ebeveyndeki tüm soyut metotları doldurmak zorundadır.

b) Arayüz (Interface):
Bu, %100 soyut bir sözleşmedir (Vertrag). İçinde sadece hangi metotların olması gerektiği yazar, metotların içi tamamen boştur.

Kurallar:

Bir arayüzde metotların gövdesi ({}) bulunmaz.

Bir sınıf, bir arayüzü implements (uygular) anahtar kelimesiyle kabul eder.

Bir sınıf birden fazla arayüzü aynı anda implements edebilir, ama sadece tek bir sınıfı extends edebilir.

Kurze Zusammenfassung
<ol>
<li>Soyut sınıflar ve arayüzler, kodumuzda belirli bir yapıyı ve kuralları zorunlu kılmak için kullanılır.</li>

<li>Soyut Sınıf (abstract class): "Yarım kalmış bir plan" gibidir. Hem tamamlanmış hem de tamamlanması zorunlu metotlar içerebilir.</li>

<li>Arayüz (interface): "Saf bir sözleşme" gibidir. Sadece metot isimleri içerir. Bir sınıf birden fazla arayüzü uygulayabilir.</li>
</ol>
2. Adım Adım Uygulama
Bir geometri örneği üzerinden gidelim.
        </pre>
    </p>
    <br>
    <hr><br>
    <?php

    // --- 1. ARAYÜZ (INTERFACE) ---
    // Bu bir sözleşmedir. Bunu uygulayan her sınıfın bir ciz() metodu olmak zorunda.

    interface Cizilebilir {
        public function ciz();
    }

    // --- 2. Soyut Sinif (ABSTRACT CLASS) ---

    abstract class Sekil{
        protected $renk;

        public function __construct($renk){
            $this->renk=$renk;
        }
        // SOYUT METHOD: ICI BOS, Bu sinifi miras alan her sinif bu metodu doldurmak zorundadir,
        abstract public function alanHesapla();
        abstract public function cevreHesapla();
    }

    // --- 3. SOMUT SINIFLAR (CONCRETE CLASSES) ---
    class Kare extends Sekil implements Cizilebilir {
        private $kenar;

        public function __construct($renk,$kenar){
            parent::__construct($renk);
            $this->kenar= $kenar;

        }

        public function alanHesapla(){
            return $this->kenar * $this->kenar;
        }
        public function cevreHesapla(){
            return 4*$this->kenar;
        }

        public function ciz() {
            echo "<div style='width: " . $this->kenar . "px; height: " . $this->kenar . "px; background-color: " . $this->renk . ";'></div>";

        }

    }

    class Daire extends Sekil implements Cizilebilir{
        private $yaricap;
        public function __construct($renk,$yaricap){
            parent::__construct($renk);
            $this->yaricap=$yaricap;
        }
        public function alanHesapla(){
            return pi()*$this->yaricap*$this->yaricap;
        }
        public function cevreHesapla(){
            return 2*pi()*$this->yaricap;
        }
        public function ciz(){

            echo "<div style='width: " . ($this->yaricap * 2) . "px; height: " . ($this->yaricap * 2) . "px; background-color: " . $this->renk . "; border-radius: 50%;'></div>";

        }
    }
    class Dikdortgen extends Sekil implements Cizilebilir{
        private $kenar1;
        private $kenar2;

        public function __construct($renk,$kenar1,$kenar2){
            parent::__construct($renk);
            $this->kenar1=$kenar1;
            $this->kenar2=$kenar2;
        }
        public function alanHesapla(){
            return $this->kenar1*$this->kenar2;
        }
        public function cevreHesapla(){
            return 2*($this->kenar1+$this->kenar2);
        }
        public function ciz(){
            echo "<div style='width: " . $this->kenar1 . "px; height: " . $this->kenar2. "px; background-color: " . $this->renk . ";'></div>";
        }
    }

    // --- 4. NESNELERİ KULLANMA ---

    $kare1= new Kare('red',120);
    echo "<p> Kirmizi karenin alani: ".$kare1->alanHesapla(). "  px</p>";
    echo "<p> Kirmizi karenin cevresi: ".$kare1->cevreHesapla(). "  cm</p>";
    $kare1->ciz();
    echo "<br>";
    echo "<hr>";
    $kare2= new Kare('yellow',80);
    echo "<p> Sari karenin alani: ".$kare2->alanHesapla(). "  px</p>";
    echo "<p> Sari karenin cevresi: ".$kare2->cevreHesapla(). "  cm</p>";
    $kare2->ciz();
    echo "<br>";
    echo "<hr>";

    $daire1= new Daire('blue',75);
    echo "<p> Mavi Dairenin alani: ".$daire1->alanHesapla(). "  px</p>";
    echo "<p> Mavi Dairenin cevresi: ".$daire1->cevreHesapla(). "  cm</p>";
    $daire1->ciz();
    echo "<br>";
    echo "<hr>";

    $dikdortgen1= new Dikdortgen('magenta',240,120);
    echo "<p> Magenta Dikdörtgenin alani: ".$dikdortgen1->alanHesapla(). "  px</p>";
    echo "<p> Magenta Dikdörtgenin cevresi: ".$dikdortgen1->cevreHesapla(). "  cm</p>";
    $dikdortgen1->ciz();
    echo "<br>";
    echo "<hr>";



    
    


    ?>

</body>

</html>