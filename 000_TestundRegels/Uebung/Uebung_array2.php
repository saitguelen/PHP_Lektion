<?php
$urunler = [
    "Laptop" => ["fiyat" => 15000, "stok" => 5],
    "Mouse" => ["fiyat" => 250, "stok" => 20],
    "Klavye" => ["fiyat" => 500, "stok" => 0]
];
echo "<pre>";
print_r($urunler);
echo "</pre>";


//function stokKontrol($urunler){
//    echo "<h1> Ürün Listesi </h1>";
//    foreach($urunler as $urunAdi => $detaylar){
//        if ($detaylar["stok"] > 0){
//            echo "Ürün stokda var <br>";
//            echo "<b> Ürün adi: </b>".$urunAdi."<br>";
//            echo "<b> Fiyati: </b>".$detaylar["fiyat"]."<br>";
//            echo "<b> Stok: </b>".$detaylar["stok"]."<br>";
//
//        }else{
//            echo "Ürün stokda yok <br>";
//        }
//
//    }
//    echo "<h2> Toplam stok degeri </h2";
//    $toplamDeger = 0;
//
//    foreach($urunler as $urunAdi => $detaylar){
//        $urunDegeri = $detaylar["fiyat"] * $detaylar["stok"];  // Her ürünün değeri
//        $toplamDeger += $urunDegeri;  // Toplama ekle
//
//        if ($detaylar["stok"] > 0){
//            echo "$urunAdi değeri: $urunDegeri TL<br>";
//        }
//    }
//
//    echo "<b>Toplam Stok Değeri: $toplamDeger TL</b><br>";
//
//}
//
//stokKontrol($urunler);
function stokKontrol($urunler){
    echo "<h1>Ürün Listesi</h1>";

    // Ürünleri listele
    foreach($urunler as $urunAdi => $detaylar){
        echo "<b>Ürün adı:</b> $urunAdi<br>";
        echo "<b>Fiyatı:</b> {$detaylar['fiyat']} TL<br>";
        echo "<b>Stok:</b> {$detaylar['stok']} adet<br>";

        if ($detaylar["stok"] > 0){
            echo "<span style='color:green'>✓ Stokta var</span><br>";
        }else{
            echo "<span style='color:red'>✗ Tükendi</span><br>";
        }
        echo "<hr>";
    }

    // Toplam değer hesapla
    echo "<h2>Toplam Stok Değeri</h2>";
    $toplamDeger = 0;

    foreach($urunler as $urunAdi => $detaylar){
        $urunDegeri = $detaylar["fiyat"] * $detaylar["stok"];
        $toplamDeger += $urunDegeri;

        if ($detaylar["stok"] > 0){
            echo "$urunAdi değeri: " . number_format($urunDegeri, 0, ',', '.') . " TL<br>";
        }
    }

    echo "<hr>";
    echo "<b>TOPLAM DEĞER: " . number_format($toplamDeger, 0, ',', '.') . " TL</b>";
}

stokKontrol($urunler);

