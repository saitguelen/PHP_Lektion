<?php
session_start();

// Zaten giriş yaptıysa dashboard'a yönlendir
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
    header("Location: dashboard.php");
    exit;
}

$error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $correct_username = 'admin';
    $correct_password = '1234';

    if(isset($_POST['username']) && isset($_POST['password'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){

            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));

            if($username === $correct_username && $password === $correct_password){
                // GİRİŞ BAŞARILI - SESSION'A KAYDET
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['login_time'] = date('Y-m-d H:i:s');

                // Dashboard'a yönlendir
                header("Location: dashboard.php");
                exit;

            }else{
                $error = "Kullanıcı adı veya şifre hatalı!";
            }

        }else{
            $error = "Lütfen tüm alanları doldurun!";
        }
    }
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Giriş Sayfası</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #667eea;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            background: #667eea;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background: #5568d3;
        }
        .error {
            background: #f44336;
            color: white;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
        }
        .info {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 13px;
            color: #1976d2;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>🔐 Giriş Yap</h1>

    <?php if(!empty($error)): ?>
        <div class="error">⚠️ <?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="username" placeholder="Kullanıcı Adı" required>
        <input type="password" name="password" placeholder="Şifre" required>
        <input type="submit" value="Giriş Yap">
    </form>

    <div class="info">
        <strong>Test Bilgileri:</strong><br>
        Kullanıcı Adı: <code>admin</code><br>
        Şifre: <code>1234</code>
    </div>
</div>

</body>
</html>