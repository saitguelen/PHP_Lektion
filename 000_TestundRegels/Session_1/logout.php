<?php
session_start();

// Session'u temizle
session_unset();
session_destroy();

// Cookie'yi de temizle (güvenlik için)
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çıkış Yapıldı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
        }
        .logout-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .success {
            background: #4caf50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        a:hover {
            background: #5568d3;
        }
    </style>
</head>
<body>

<div class="logout-container">
    <div class="success">
        <h1>✅ Çıkış Yapıldı</h1>
        <p>Güvenli bir şekilde çıkış yaptınız.</p>
    </div>

    <p>Oturumunuz sonlandırıldı.</p>
    <p>Tekrar giriş yapmak için aşağıdaki linke tıklayın.</p>

    <a href="login.php">🔐 Giriş Sayfasına Dön</a>
</div>

</body>
</html>