<?php
session_start();

// ÖNCELİKLE sıfırlama kontrolü
if(isset($_GET['sifirla'])){
    $_SESSION['sayac'] = 0;
    header("Location: sayac.php");
    exit;
}

// Sayaç yoksa oluştur
if(!isset($_SESSION['sayac'])){
    $_SESSION['sayac'] = 0;
}

// Her yüklemede artır
$_SESSION['sayac']++;
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayfa Sayacı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
            background: #f5f5f5;
        }
        .counter-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .count {
            font-size: 72px;
            color: #667eea;
            font-weight: bold;
            margin: 20px 0;
        }
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            font-size: 16px;
        }
        .btn-reset {
            background: #e74c3c;
            color: white;
        }
        .btn-refresh {
            background: #27ae60;
            color: white;
        }
    </style>
</head>
<body>

<div class="counter-box">
    <h1>📊 Sayfa Sayacı</h1>
    <p>Bu sayfayı kaç kez yenilediniz:</p>

    <div class="count"><?php echo $_SESSION['sayac']; ?></div>

    <p>Sayfayı yenilemek için F5'e basın veya:</p>
    <button onclick="location.reload()" class="btn btn-refresh">🔄 Yenile</button>
    <a href="?sifirla=1" class="btn btn-reset">🗑️ Sıfırla</a>
</div>

</body>
</html>