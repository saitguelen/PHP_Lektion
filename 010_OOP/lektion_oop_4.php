<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>OOP Ders 4: static Özellikler ve Metotlar</h1>
    <p>
    <pre>
Şimdiye kadar bir sınıfın özelliklerini veya metotlarını kullanmak için hep bir nesne (object) oluşturmamız gerekti ($nesne = new Sinif();).
Peki ya bir nesne oluşturmaya gerek kalmadan doğrudan sınıfın kendisi üzerinden bir metoda veya özelliğe erişmek istersek? 
İşte <strong>static</strong> anahtar kelimesi burada devreye giriyor.

1.<strong>(Grundlagen)</strong>
a) "Normal" (Instance) ve static Arasındaki Fark Nedir?
Yine araba fabrikası analojimize dönelim:
Normal (Instance) Özellik/Metot: Tek bir nesneye aittir.
$benimArabam->renk: Benim spesifik arabamın rengidir.
$seninAraban->calistir(): Senin spesifik arabanın motorunu çalıştırır.

static Özellik/Metot: Sınıfın kendisine aittir, tek bir nesneye değil.

Araba::$toplamUretilenArabaSayisi: Fabrikanın toplamda ürettiği araba sayısıdır. Bu, tek bir arabaya ait bir bilgi değildir, 
"Araba" konseptinin geneline aittir.

Araba::fabrikasyonHatalariniKontrolEt(): Belirli bir araba üzerinde değil, genel bir kontrol işlemi yapan bir metottur.

b) Yeni Sözdizimi (Syntax): :: Operatörü
Statik özelliklere ve metotlara erişmek için -> operatörü yerine :: (Scope Resolution Operator - Kapsam Çözümleme Operatörü) kullanılır.

SinifAdi::$statikOzellik

SinifAdi::statikMetot()

En Önemli Kural: Statik metotlar bir nesneye ait olmadıkları için, içlerinde $this anahtar kelimesini kullanamazlar. 
Sınıfın kendi içindeki başka bir statik özelliğe veya metoda erişmek için self:: kullanılır.

2. Adım Adım Uygulama
Statik metotlar için en klasik örnek, bir "yardımcı" sınıftır. Örneğin, matematiksel işlemler yapan bir sınıf. 
Sonuçta 5 ile 10'u toplamak için bir "matematik nesnesi" oluşturmaya gerek yoktur. 

Kurze Zusammenfassung
<ol>
    <li>static özellikler ve metotlar, bir nesne örneğine değil, sınıfın kendisine aittir.</li>
    <li>Onlara new ile nesne oluşturmadan, doğrudan SınıfAdı::üyeAdı şeklinde erişiriz.</li>
    <li>Statik bir metot içinde, bir nesneye ait olmadığı için $this kullanılamaz. Bunun yerine self:: kullanılır.</li>
</ol>
        </pre>
    </p>
    <?php

    class Matematik
    {
        //Static : Bu özellik tüm matematik sinifina aittir.
        //Yapilan tüm islemleri saymak icin kullancagiz
        public static $IslemSayisi = 0;

        //Static Method : Bu metodu cagirmak icin "new Matematik()" yapmamiza gerek yok

        public static function topla($sayi1, $sayi2)
        {
            //Sinifin kendi icinde bir özellige erisirken "self::" kullaniriz:
            self::$IslemSayisi++;
            return $sayi1 + $sayi2;
        }
        public static function carpma($sayi1, $sayi2)
        {
            self::$IslemSayisi++;
            return $sayi1 * $sayi2;
        }
        public static function cikarma($sayi1, $sayi2)
        {
            self::$IslemSayisi++;
            return $sayi1 - $sayi2;
        }
        public static function bolme($sayi1, $sayi2)
        {
            self::$IslemSayisi++;
            return $sayi1 / $sayi2;
        }
        public static function modulo($sayi1, $sayi2)
        {
            self::$IslemSayisi++;
            return $sayi1 % $sayi2;
        }
    }

    // --- 2. Static Metotları ve Özellikleri Kullanma ---

    // Dikkat: "new Matematik()" diye bir nesne OLUŞTURMADIK!

    // Metotları doğrudan Sınıf Adı üzerinden çağırıyoruz.
    echo "<h2> Zum Beispiel </h2>";
    $toplam = Matematik::topla(10, 5);
    echo "<p> 10+5= " . $toplam . "</p>";
    $carpim = Matematik::carpma(12, 3);
    echo "<p> 12*3= " . $carpim . "</p>";
    $cikarim = Matematik::cikarma(15, 3);
    echo "<p> 15-3= " . $cikarim . "</p>";
    $bolum = Matematik::bolme(12, 3);
    echo "<p> 12/3= " . $bolum . "</p>";
    $modul = Matematik::modulo(2546, 12);
    echo "<p> Modulo: 2546%12= " . $modul . "</p>";


    // Toplamda kaç işlem yaptığımızı kontrol edelim.
    echo "<p>Toplam yapılan işlem sayısı: " . Matematik::$IslemSayisi . "</p>";
    ?>
</body>

</html>