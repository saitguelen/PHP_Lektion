<?php
session_start();

// Önceki adım tamamlanmış mı kontrol et
if(!isset($_SESSION['anket']['isim'])){
    header('Location: anket1.php');
    exit;
}

if(isset($_POST['yas'])){
    $_SESSION['anket']['yas'] = (int)$_POST['yas'];
    header('Location: anket3.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anket - Adım 2/3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .progress {
            background: #e0e0e0;
            height: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .progress-bar {
            background: #667eea;
            height: 100%;
            border-radius: 5px;
            width: 66%;
            transition: width 0.3s;
        }
        h1 {
            margin-top: 0;
            color: #333;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="number"]:focus {
            border-color: #667eea;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background: #5568d3;
        }
        .btn-back {
            display: inline-block;
            margin-top: 10px;
            color: #667eea;
            text-decoration: none;
        }
        .btn-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>📋 Anket</h1>

    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <h2>Adım 2/3</h2>
    <p>Merhaba <strong><?= htmlspecialchars($_SESSION['anket']['isim']) ?></strong>!</p>
    <p>Lütfen yaşınızı girin:</p>

    <form method="POST">
        <input type="number" name="yas" placeholder="Yaşınız" min="1" max="120" required autofocus>
        <button type="submit">İleri →</button>
    </form>

    <div style="text-align: center;">
        <a href="anket1.php" class="btn-back">← Geri Dön</a>
    </div>
</div>

</body>
</html>