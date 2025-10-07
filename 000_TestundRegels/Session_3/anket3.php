<?php
session_start();

// Önceki adımlar tamamlanmış mı kontrol et
if(!isset($_SESSION['anket']['isim']) || !isset($_SESSION['anket']['yas'])){
    header('Location: anket1.php');
    exit;
}

if(isset($_POST['meslek'])){
    $_SESSION['anket']['meslek'] = htmlspecialchars(trim($_POST['meslek']));
    header('Location: sonuc.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anket - Adım 3/3</title>
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
            width: 100%;
            transition: width 0.3s;
        }
        h1 {
            margin-top: 0;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="text"]:focus {
            border-color: #667eea;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #27ae60;
            color: blueviolet;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background: #229954;
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

    <h2>Adım 3/3 - Son Adım!</h2>
    <p>Lütfen mesleğinizi girin:</p>

    <form method="POST">
        <input type="text" name="meslek" placeholder="Mesleğiniz" required autofocus>
        <button type="submit">✅ Anketi Tamamla</button>
    </form>

    <div style="text-align: center;">
        <a href="anket2.php" class="btn-back">← Geri Dön</a>
    </div>
</div>

</body>
</html>