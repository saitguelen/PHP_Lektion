<?php
session_start();

// Anket tamamlanmış mı kontrol et
if(!isset($_SESSION['anket']['isim']) ||
    !isset($_SESSION['anket']['yas']) ||
    !isset($_SESSION['anket']['meslek'])){
    header("Location: anket1.php");
    exit;
}

// Verileri al
$isim = $_SESSION['anket']['isim'];
$yas = $_SESSION['anket']['yas'];
$meslek = $_SESSION['anket']['meslek'];

// Yeniden başlat
if(isset($_GET['yeniden'])){
    unset($_SESSION['anket']);
    header("Location: anket1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anket - Sonuç</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .result-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .success-icon {
            font-size: 64px;
            margin-bottom: 20px;
        }
        h1 {
            color: #27ae60;
            margin: 0 0 30px 0;
        }
        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: left;
        }
        .info-box p {
            margin: 10px 0;
            font-size: 18px;
        }
        .info-box strong {
            color: #667eea;
        }
        .btn-restart {
            display: inline-block;
            padding: 15px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }
        .btn-restart:hover {
            background: #5568d3;
        }
    </style>
</head>
<body>

<div class="result-container">
    <div class="success-icon">🎉</div>
    <h1>Anket Tamamlandı!</h1>

    <p>Teşekkürler, anketimizi tamamladığınız için!</p>

    <div class="info-box">
        <p><strong>👤 Adınız:</strong> <?= htmlspecialchars($isim) ?></p>
        <p><strong>🎂 Yaşınız:</strong> <?= htmlspecialchars($yas) ?></p>
        <p><strong>💼 Mesleğiniz:</strong> <?= htmlspecialchars($meslek) ?></p>
    </div>

    <p style="color: #666; margin-top: 20px;">
        Bilgileriniz session ile güvenli bir şekilde saklandı.
    </p>

    <a href="?yeniden=1" class="btn-restart">🔄 Anketi Yeniden Başlat</a>
</div>

</body>
</html>