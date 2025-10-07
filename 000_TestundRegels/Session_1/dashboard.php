<?php
session_start();

// GİRİŞ KONTROLÜ - ÇOK ÖNEMLİ!
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
    header("Location: login.php");
    exit;
}

// Kullanıcı bilgilerini al
$username = $_SESSION['username'];
$login_time = $_SESSION['login_time'];
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kontrol Paneli</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .dashboard {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .welcome {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .info-box {
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 15px;
            margin: 20px 0;
        }
        .logout-btn {
            background: #f44336;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .logout-btn:hover {
            background: #d32f2f;
        }
        h1 { margin: 0; }
        h2 { color: #333; }
    </style>
</head>
<body>

<div class="dashboard">
    <div class="welcome">
        <h1>🎉 Hoş Geldin, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>Başarıyla giriş yaptınız.</p>
    </div>

    <h2>📊 Dashboard</h2>

    <div class="info-box">
        <strong>Oturum Bilgileri:</strong><br>
        👤 Kullanıcı: <?php echo htmlspecialchars($username); ?><br>
        🕐 Giriş Zamanı: <?php echo $login_time; ?><br>
        🔑 Session ID: <?php echo session_id(); ?>
    </div>

    <p>Bu sayfa sadece giriş yapmış kullanıcılar tarafından görülebilir.</p>
    <p>Session ile korunmaktadır. Giriş yapmadan erişim mümkün değildir.</p>

    <a href="logout.php" class="logout-btn">🚪 Çıkış Yap</a>
</div>

</body>
</html>