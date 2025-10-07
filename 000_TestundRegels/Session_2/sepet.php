<?php
session_start();

$urunler = [
    1 => [
        "id" => 1,
        "ad" => "Laptop",
        "fiyat" => 15000,
        "resim" => "laptop.jpg"
    ],
    2 => [
        "id" => 2,
        "ad" => "Mouse",
        "fiyat" => 250,
        "resim" => "mouse.jpg"
    ],
    3 => [
        "id" => 3,
        "ad" => "Klavye",
        "fiyat" => 500,
        "resim" => "klavye.jpg"
    ],
    4 => [
        "id" => 4,
        "ad" => "Monitör",
        "fiyat" => 3500,
        "resim" => "monitor.jpg"
    ],
    5 => [
        "id" => 5,
        "ad" => "Kulaklık",
        "fiyat" => 750,
        "resim" => "kulaklik.jpg"
    ],
    6 => [
        "id" => 6,
        "ad" => "Telefon",
        "fiyat" => 8500,
        "resim" => "telefon.jpg"
    ],
    7 => [
        "id" => 7,
        "ad" => "Tablet",
        "fiyat" => 5000,
        "resim" => "tablet.jpg"
    ],
    8 => [
        "id" => 8,
        "ad" => "Webcam",
        "fiyat" => 1200,
        "resim" => "webcam.jpg"
    ]
];

// Sepet yoksa oluştur
if(!isset($_SESSION["sepet"])){
    $_SESSION["sepet"] = [];
}

// SEPETE EKLEME İŞLEMİ
if(isset($_GET['ekle'])){
    $urun_id = (int)$_GET['ekle'];  // ✅ ID'yi al ve integer'a çevir

    // Ürün var mı kontrol et
    if(isset($urunler[$urun_id])){

        // Sepette zaten var mı?
        if(isset($_SESSION['sepet'][$urun_id])){
            // Varsa miktarı artır
            $_SESSION['sepet'][$urun_id]['miktar']++;
        }else{
            // Yoksa yeni ekle
            $_SESSION['sepet'][$urun_id] = [
                'id' => $urunler[$urun_id]['id'],
                'ad' => $urunler[$urun_id]['ad'],
                'fiyat' => $urunler[$urun_id]['fiyat'],
                'miktar' => 1
            ];
        }
    }

    // Sayfayı yenile
    header("Location: sepet.php");
    exit;  // ✅ exit eklemeyi unutma!
}

// SEPETTEN SİLME İŞLEMİ
if(isset($_GET['sil'])){
    $urun_id = (int)$_GET['sil'];

    if(isset($_SESSION['sepet'][$urun_id])){
        unset($_SESSION['sepet'][$urun_id]);
    }

    header("Location: sepet.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticaret Sepet Sistemi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        h1, h2 {
            color: #333;
        }
        .container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }
        .urunler {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        .urun-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .urun-info h3 {
            margin: 0 0 5px 0;
            color: #333;
        }
        .fiyat {
            color: #e74c3c;
            font-size: 18px;
            font-weight: bold;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-ekle {
            background: #27ae60;
            color: white;
        }
        .btn-ekle:hover {
            background: #229954;
        }
        .btn-sil {
            background: #e74c3c;
            color: white;
        }
        .sepet {
            background: white;
            padding: 20px;
            border-radius: 8px;
            position: sticky;
            top: 20px;
            height: fit-content;
        }
        .sepet-item {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }
        .toplam {
            background: #3498db;
            color: white;
            padding: 15px;
            margin-top: 15px;
            border-radius: 5px;
            text-align: center;
        }
        .bos-sepet {
            color: #999;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<h1>🛒 E-Ticaret Sepet Sistemi</h1>

<div class="container">
    <!-- ÜRÜN LİSTESİ -->
    <div class="urunler">
        <h2>📦 Ürünler</h2>

        <?php foreach($urunler as $urun): ?>
            <div class="urun-card">
                <div class="urun-info">
                    <h3><?php echo $urun['ad']; ?></h3>
                    <div class="fiyat"><?php echo number_format($urun['fiyat'], 0, ',', '.'); ?> TL</div>
                </div>
                <a href="?ekle=<?php echo $urun['id']; ?>" class="btn btn-ekle">
                    ➕ Sepete Ekle
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- SEPET -->
    <div class="sepet">
        <h2>🛍️ Sepetim</h2>

        <?php if(empty($_SESSION['sepet'])): ?>
            <div class="bos-sepet">Sepetiniz boş</div>
        <?php else: ?>
            <?php
            $toplam = 0;
            foreach($_SESSION['sepet'] as $sepet_urun):
                $ara_toplam = $sepet_urun['fiyat'] * $sepet_urun['miktar'];
                $toplam += $ara_toplam;
                ?>
                <div class="sepet-item">
                    <strong><?php echo $sepet_urun['ad']; ?></strong><br>
                    Miktar: <?php echo $sepet_urun['miktar']; ?> adet<br>
                    Fiyat: <?php echo number_format($ara_toplam, 0, ',', '.'); ?> TL<br>
                    <a href="?sil=<?php echo $sepet_urun['id']; ?>" class="btn btn-sil" style="margin-top: 5px; font-size: 12px; padding: 5px 10px;">
                        🗑️ Sil
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="toplam">
                <h3 style="margin: 0;">TOPLAM</h3>
                <h2 style="margin: 5px 0 0 0;"><?php echo number_format($toplam, 0, ',', '.'); ?> TL</h2>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
