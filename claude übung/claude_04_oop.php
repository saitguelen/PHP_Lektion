<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
💻 UYGULAMA ZAMANI!
Görev: Kütüphane Yönetim Sistemi oluştur:
1. Kitap Class'ı:

Properties: $baslik, $yazar, $isbn, $durum (ödünçte/müsait)
Methods: bilgileriGoster(), oduncVer(), iadeet()

2. Uye Class'ı:

Properties: $ad, $soyad, $uyeNo, $oduncKitaplar (array)
Methods: bilgileriGoster(), kitapOduncAl(), kitapIadeEt()

3. Kutuphane Class'ı:

Properties: $kitaplar (array), $uyeler (array)
Methods: kitapEkle(), uyeEkle(), kitapAra(), raporla()

4. En az 3 kitap ve 2 üye oluştur
5. Ödünç verme işlemi simüle et
    */

    // 1. Kitap Class'ı:

    // Properties: $baslik, $yazar, $isbn, $durum (ödünçte/müsait)geliehen/verfügbar
    // Methods: bilgileriGoster(), oduncVer(), iadeet()

    class Buch
    {

        public $baslik;
        public $yazar;
        private $isbn;
        private $durum;

        // Konstruktor Methode

        public function __construct($baslik, $yazar, $isbn, $durum)
        {
            $this->baslik = $baslik;
            $this->yazar = $yazar;
            $this->isbn = $isbn;
            $this->durum = $durum;
        }

        //Methodes
        public function bilgileriGoster()
        {
            return "<b>" . $this->baslik . "</b>" . ", gehört " . "<b>" . $this->yazar . "</b>" . " und isbn no ist: " . "<b>" . $this->isbn . "</b>" .  " und dieses Buch ist :" . "<b>" . $this->durum . "</b>" . "! <br />";
        }

        public function getDurum()
        {
            return $this->durum;
        }
        public function oduncVer()
        {
            if ($this->durum == "Verfügbar") {
                $this->durum = "Geliehen";
                echo  $this->baslik . " ist geliehen<br />";
                return true;
            } else {
                echo $this->baslik . " ist schon ausgeliehen.<br />";
                return false;
            }
        }

        public function iadeEt()
        {
            if ($this->durum == "Geliehen") {
                $this->durum = "Verfügbar";
                echo $this->baslik . " ist jetztzurückgegeben!!<br />";
                return true;
            } else {
                echo $this->baslik . " ist schon verfügbar.<br />";
                return false;
            }
        }
    }
    //Object erstellen
    $buch1 = new Buch("Die Verwandlung", "Franz Kafka", "978-3-596-90353-2", "Verfügbar");
    $buch2 = new Buch("Der Vorleser", "Bernhard Schlink", "978-3-257-23040-0", "Geliehen");
    $buch3 = new Buch("Das Parfüm", "Patrick Süskind", "978-3-257-22800-1", "Verfügbar");
    $buch4 = new Buch("Im Westen nichts Neues", "Erich Maria Remarque", "978-3-462-02731-8", "Verfügbar");
    $buch5 = new Buch("Tschick", "Wolfgang Herrndorf", "978-3-499-25635-6", "Geliehen");



    echo $buch1->bilgileriGoster();
    echo $buch2->bilgileriGoster();
    echo $buch3->bilgileriGoster();
    echo $buch4->bilgileriGoster();
    echo $buch5->bilgileriGoster();

    echo "<b>'Das Parfüm' ödünç alınıyor...</b><br />";
    $buch3->oduncVer();
    echo "<b>'Der Vorleser' ödünç alınıyor...</b><br />";
    $buch2->oduncVer();
    echo "<hr>";

    // 4. İşlemlerden sonra kitapların son durumunu tekrar gösterelim
    echo "<h3>Kitapların Son Durumu:</h3>";
    echo $buch1->bilgileriGoster();
    echo $buch2->bilgileriGoster();
    echo $buch3->bilgileriGoster();


    class Uye
    {
        public $ad;
        public $soyad;
        private $uyeNo;
        public $oduncKitaplar = array();

        public function __construct($ad, $soyad, $uyeNo)
        {
            $this->ad = $ad;
            $this->soyad = $soyad;
            $this->uyeNo = $uyeNo;
        }
        public function bilgileriGoster()
        {
            $kitapListesi = "Henüz ödünc kitap almamis.";
            if (!empty($this->oduncKitaplar)) {
                $geciciListe = [];
                foreach ($this->oduncKitaplar as $kitap) {
                    $geciciListe[] = $kitap->baslik;
                }
                $kitapListesi = implode(", ", $geciciListe);
            }
            return "<b>" . $this->ad . "</b>" . "  " . "<b>" . $this->soyad . "</b>" . " uye nummer lautet  " . "<b>" . $this->uyeNo . "</b>" .  " und dieses Buch ist :" . "<b>" . $kitapListesi . "<br />";
        }
        public function getOduncKitaplar()
        {
            return $this->oduncKitaplar;
        }

        public function kitapOduncAl(Buch $kitap)
        {
            if ($kitap->getDurum() == "Verfügbar") {
                $kitap->oduncVer();
                $this->oduncKitaplar[] = $kitap;

                echo $this->ad . ", '" . $kitap->baslik . "' adlı kitabı başarıyla ödünç aldı.<br />";
            } else {
                echo "Üzgünüz, '" . $kitap->baslik . "' adlı kitap şu anda müsait değil.<br />";
            }
        }


        public function kitapIadeEt(Buch $kitap)
        {
            if ($kitap->getDurum() != "Verfügbar") {
                $kitap->iadeEt();
                echo $this->ad . ", '" . $kitap->baslik . "' adlı kitabı başarıyla geri alindı.<br />";
            } else {
                echo "Üzgünüz, '" . $kitap->baslik . "' adlı kitap şu anda kütüphanede..<br />";
            }
        }
    }




    echo "<h3>Üye Kayıtları Oluşturuluyor...</h3>";
    $uye1 = new Uye("Ahmet", "Yılmaz", "101");
    $uye2 = new Uye("Zeynep", "Kaya", "102");
    $uye3 = new Uye("Mustafa", "Demir", "103");
    $uye4 = new Uye("Elif", "Şahin", "104");
    $uye5 = new Uye("Mehmet", "Çelik", "105");
    echo "5 üye başarıyla oluşturuldu!<br /><hr>";

    echo "<h3>Üyelerin Başlangıç Durumu:</h3>";
    echo $uye1->bilgileriGoster();
    echo $uye2->bilgileriGoster();

    echo "<hr>";
    echo "<hr>";


    echo "<h3>Ödünç Alma İşlemi:</h3>";
    // 101 numaralı üye (Ahmet Yılmaz), "Die Verwandlung" kitabını ödünç alıyor.
    $uye1->kitapOduncAl($buch1);
    echo "<br />";
    $uye5->kitapOduncAl($buch4);


    echo "<h3>İşlem Sonrası Üyelerin Durumu:</h3>";
    echo $uye1->bilgileriGoster();
    echo $uye2->bilgileriGoster();
    echo $uye4->bilgileriGoster();

    echo "<h3>Ödünç IAdeİşlemi:</h3>";
    // 101 numaralı üye (Ahmet Yılmaz), "Die Verwandlung" kitabını ödünç alıyor.
    $uye1->kitapIadeEt($buch1);
    $uye4->kitapIadeEt($buch4);
    echo "<br />";
    echo $uye1->bilgileriGoster();
    echo $uye2->bilgileriGoster();
    echo $uye5->bilgileriGoster();

    echo $buch1->bilgileriGoster();
    echo $buch2->bilgileriGoster();
    echo $buch3->bilgileriGoster();
    echo $buch4->bilgileriGoster();
    echo $buch5->bilgileriGoster();
    echo "<hr>";
    echo "<hr>";


    class Bibliothek
    {
        public $kitaplar = array();
        public $uyeler = array();

        public function KitapEkle(Buch $kitap) {}
        public function uyeEkle() {}
        public function kitapAra(Buch $buch)
        {
            if (!empty($this->baslik)) {
                echo "bu kitap " . $buch->baslik . " var.<br>";
                return true;
            } else {
                echo "Maalesef bu kitap yok";
                return false;
            }
        }
        public function raporla()
        {
            $toplamKitap = count($this->kitaplar);
            $toplamUye = count($this->uyeler);
            $oduncKitap = 0;
            $musaitKitap = 0;

            foreach ($this->kitaplar as $kitap) {
                if ($kitap->getDurum() == "Geliehen") {
                    $oduncKitap++;
                } else {
                    $musaitKitap++;
                }
            }

            echo "<table>";
            echo "<tr><th>İstatistik</th><th>Değer</th><th>Statistik (DE)</th></tr>";
            echo "<tr><td>Toplam Kitap</td><td>$toplamKitap</td><td>Gesamte Bücher</td></tr>";
            echo "<tr><td>Toplam Üye</td><td>$toplamUye</td><td>Gesamte Mitglieder</td></tr>";
            echo "<tr><td>Ödünçte Kitap</td><td>$oduncKitap</td><td>Ausgeliehene Bücher</td></tr>";
            echo "<tr><td>Müsait Kitap</td><td>$musaitKitap</td><td>Verfügbare Bücher</td></tr>";
            echo "</table>";

            // Kitap Listesi
            echo "<h4>📖 Tüm Kitaplar:</h4>";
            foreach ($this->kitaplar as $kitap) {
                echo $kitap->bilgileriGoster();
            }

            // Üye Listesi
            echo "<h4>👥 Tüm Üyeler:</h4>";
            foreach ($this->uyeler as $uye) {
                echo $uye->bilgileriGoster() . "<br>";
            }
        }
    
    }

    ?>

</body>

</html>