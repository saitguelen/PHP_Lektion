<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // -----------------------------------------------------------------------------
    // 1. SINIF: Buch (Kitap) - Değişiklik yok, bu sınıf harika çalışıyor.
    // -----------------------------------------------------------------------------
    class Buch
    {
        public $baslik;
        public $yazar;
        private $isbn;
        private $durum;

        public function __construct($baslik, $yazar, $isbn, $durum = "Verfügbar")
        {
            $this->baslik = $baslik;
            $this->yazar = $yazar;
            $this->isbn = $isbn;
            $this->durum = $durum;
        }

        public function bilgileriGoster()
        {
            return "<b>Kitap:</b> {$this->baslik} ({$this->yazar}) - <b>ISBN:</b> {$this->isbn} - <b>Durum:</b> {$this->durum}<br />";
        }

        // Private özelliklere dışarıdan erişim için "getter" metotları
        public function getIsbn()
        {
            return $this->isbn;
        }
        public function getDurum()
        {
            return $this->durum;
        }

        // Kitabın durumunu değiştiren metotlar
        public function oduncVer()
        {
            $this->durum = "Geliehen";
        }
        public function iadeEt()
        {
            $this->durum = "Verfügbar";
        }
    }

    // -----------------------------------------------------------------------------
    // 2. SINIF: Uye (Üye)
    // -----------------------------------------------------------------------------
    class Uye
    {
        public $ad;
        public $soyad;
        private $uyeNo;
        public $oduncKitaplar = [];

        public function __construct($ad, $soyad, $uyeNo)
        {
            $this->ad = $ad;
            $this->soyad = $soyad;
            $this->uyeNo = $uyeNo;
        }

        public function bilgileriGoster()
        {
            $kitapListesi = "Henüz ödünç kitap almamış.";
            if (!empty($this->oduncKitaplar)) {
                $kitapBasliklari = [];
                foreach ($this->oduncKitaplar as $kitap) {
                    $kitapBasliklari[] = $kitap->baslik;
                }
                $kitapListesi = implode(", ", $kitapBasliklari);
            }
            return "<b>Üye:</b> {$this->ad} {$this->soyad} (No: {$this->uyeNo}) | <b>Ödünç Kitaplar:</b> {$kitapListesi}<br />";
        }

        public function getUyeNo()
        {
            return $this->uyeNo;
        }

        // Ödünç alma ve iade metotları
        public function kitapEkle(Buch $kitap)
        {
            $this->oduncKitaplar[] = $kitap;
        }

        public function kitapCikar(Buch $kitap)
        {
            // *** ÖNEMLİ DÜZELTME: Kitabı üyenin listesinden kaldırma ***
            foreach ($this->oduncKitaplar as $key => $oduncKitap) {
                if ($oduncKitap->getIsbn() == $kitap->getIsbn()) {
                    unset($this->oduncKitaplar[$key]); // 'unset' ile diziden siliyoruz.
                    // Dizinin index'lerini yeniden düzenlemek için:
                    $this->oduncKitaplar = array_values($this->oduncKitaplar);
                    return true;
                }
            }
            return false;
        }
    }

    // -----------------------------------------------------------------------------
    // 3. SINIF: Bibliothek (Kütüphane) - Her şeyi yöneten merkezi sınıf
    // -----------------------------------------------------------------------------
    class Bibliothek
    {
        public $kitaplar = [];
        public $uyeler = [];

        // Kütüphaneye kitap ekler
        public function kitapEkle(Buch $kitap)
        {
            $this->kitaplar[$kitap->getIsbn()] = $kitap; // ISBN'yi anahtar olarak kullanmak aramayı hızlandırır.
            echo "'{$kitap->baslik}' kütüphaneye eklendi.<br />";
        }

        // Kütüphaneye üye ekler
        public function uyeEkle(Uye $uye)
        {
            $this->uyeler[$uye->getUyeNo()] = $uye;
            echo "'{$uye->ad} {$uye->soyad}' üye olarak eklendi.<br />";
        }

        // Merkezi ödünç verme işlemi
        public function kitapOduncVer($uyeNo, $isbn)
        {
            $uye = $this->uyeler[$uyeNo] ?? null; // Üye var mı?
            $kitap = $this->kitaplar[$isbn] ?? null; // Kitap var mı?

            if ($uye && $kitap) {
                if ($kitap->getDurum() == "Verfügbar") {
                    $kitap->oduncVer();
                    $uye->kitapEkle($kitap);
                    echo "<p style='color:green;'><b>BAŞARILI:</b> '{$uye->ad}', '{$kitap->baslik}' kitabını ödünç aldı.</p>";
                } else {
                    echo "<p style='color:orange;'><b>UYARI:</b> '{$kitap->baslik}' kitabı şu an müsait değil.</p>";
                }
            } else {
                echo "<p style='color:red;'><b>HATA:</b> Geçersiz üye numarası veya ISBN.</p>";
            }
        }

        // Merkezi iade alma işlemi
        public function kitapIadeAl($uyeNo, $isbn)
        {
            $uye = $this->uyeler[$uyeNo] ?? null;
            $kitap = $this->kitaplar[$isbn] ?? null;

            if ($uye && $kitap) {
                if ($kitap->getDurum() == "Geliehen") {
                    $kitap->iadeEt();
                    $uye->kitapCikar($kitap); // Düzeltilmiş metodu çağırıyoruz.
                    echo "<p style='color:blue;'><b>BİLGİ:</b> '{$uye->ad}', '{$kitap->baslik}' kitabını iade etti.</p>";
                } else {
                    echo "<p style='color:orange;'><b>UYARI:</b> Bu kitap zaten kütüphanede görünüyor.</p>";
                }
            } else {
                echo "<p style='color:red;'><b>HATA:</b> Geçersiz üye numarası veya ISBN.</p>";
            }
        }

        // Genel durumu raporlar
        public function raporla()
        {
            echo "<hr><h2>📊 Kütüphane Durum Raporu</h2>";

            echo "<h4>📖 Tüm Kitaplar (" . count($this->kitaplar) . " adet):</h4>";
            foreach ($this->kitaplar as $kitap) {
                echo $kitap->bilgileriGoster();
            }

            echo "<h4>👥 Tüm Üyeler (" . count($this->uyeler) . " adet):</h4>";
            foreach ($this->uyeler as $uye) {
                echo $uye->bilgileriGoster();
            }
            echo "<hr>";
        }
    }

    // =============================================================================
    // UYGULAMA ALANI: Tüm sistemi burada kullanıyoruz.
    // =============================================================================

    // 1. Merkezi Kütüphane nesnesini oluştur.
    $sehirKutuphanesi = new Bibliothek();
    echo "<h1>📚 Kütüphane Yönetim Sistemi</h1>";
    echo "<hr>";

    // 2. Kitapları ve Üyeleri oluşturup KÜTÜPHANEYE ekle.
    $sehirKutuphanesi->kitapEkle(new Buch("Die Verwandlung", "Franz Kafka", "978-3-596-90353-2"));
    $sehirKutuphanesi->kitapEkle(new Buch("Der Vorleser", "Bernhard Schlink", "978-3-257-23040-0"));
    $sehirKutuphanesi->kitapEkle(new Buch("Das Parfüm", "Patrick Süskind", "978-3-257-22800-1"));
    echo "<br>";
    $sehirKutuphanesi->uyeEkle(new Uye("Ahmet", "Yılmaz", "101"));
    $sehirKutuphanesi->uyeEkle(new Uye("Zeynep", "Kaya", "102"));

    // 3. Başlangıç durumunu görmek için raporla.
    $sehirKutuphanesi->raporla();

    // 4. Ödünç verme işlemlerini SADECE kütüphane üzerinden yap.
    echo "<h3>🔄 İşlemler Başlatılıyor...</h3>";
    $sehirKutuphanesi->kitapOduncVer("101", "978-3-596-90353-2"); // Ahmet, Die Verwandlung'u alıyor.
    $sehirKutuphanesi->kitapOduncVer("102", "978-3-257-22800-1"); // Zeynep, Das Parfüm'ü alıyor.
    $sehirKutuphanesi->kitapOduncVer("101", "978-3-257-22800-1"); // Ahmet, Das Parfüm'ü almaya çalışıyor (başarısız olmalı).

    // 5. İşlemlerden sonraki durumu görmek için tekrar raporla.
    $sehirKutuphanesi->raporla();

    // 6. İade işlemini SADECE kütüphane üzerinden yap.
    echo "<h3>🔄 İade İşlemi Başlatılıyor...</h3>";
    $sehirKutuphanesi->kitapIadeAl("101", "978-3-596-90353-2"); // Ahmet, Die Verwandlung'u iade ediyor.

    // 7. Final durumunu gör.
    $sehirKutuphanesi->raporla();

    ?>

</body>

</html>