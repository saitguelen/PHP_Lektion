<?php
session_start();

if(isset($_POST['isim'])){
    $_SESSION['anket']['isim'] = htmlspecialchars(trim($_POST['isim']));
    header('Location: anket2.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anket - Adım 1/3</title>
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
            width: 33%;
            transition: width 0.5s;
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
    </style>
</head>
<body>

<div class="form-container">
    <h1>📋 Anket</h1>

    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <h2>Adım 1/3</h2>
    <p>Lütfen adınızı girin:</p>

    <form method="POST">
        <input type="text" name="isim" placeholder="Adınız" required autofocus>
        <button type="submit">İleri →</button>
    </form>
</div>

</body>
</html>