<?php
session_start();
require_once 'config.php';
$pdo = getConnection();
$errors = array();
$success = '';
// ✅ DOĞRU sıra:
// 1. Form gönderildi mi kontrol et
// 2. Verileri al ve kontrol et
// 3. Database işlemi yap
// 4. HTML göster
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //verileri al
    $username = trim($_POST["username"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $password = trim($_POST["password"] ?? '');
    $password_confirm = trim($_POST["password_confirm"] ?? '');

    if(empty($username)){
        $errors[] = "Kullanici adi bos olamaz!";
    }
    if(empty($email)){
        $errors[] = "E-mail bos olamaz!";
    }
    if(empty($password)){
        $errors[] = "Parola bos olamaz!";
    }
    //Email format kontrolü
    if(!empty($password) && strlen($password)<6){
        $errors[] = "Sifre en az 6 karakter olmali!";
    }
    if($password != $password_confirm){
        $errors[] = "Sifre eslesmiyor!";
    }
    if(empty($errors)){
        $sql= "SELECT id FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username' => $username]);

        if($stmt->rowCount() > 0){
            $errors[] = "Bu kullanici adi zaten var!";
        }
    }
    if(empty($errors)){
        $sql= "SELECT id FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        if($stmt->rowCount() > 0){
            $errors[] = "Bu e-mail adresi zaten var!";

        }
    }
    if(empty($errors)){
        $sql= "SELECT id FROM users WHERE password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':password' => $password]);
        if($stmt->rowCount() > 0){
            $errors[] = "Parola sifre zaten var!";

        }
    }
    if(empty($errors)){
        try{
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            //Database kayit
            $sql = "INSERT INTO users (username, email, password) VALUES ( :username, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':password' => $hashedPassword

            ]);
            $success = "Kayit basari ile bitirilmistir!!";

            // 3 saniye sonra login'e yönlendir
            header("refresh:3;url=login.php");
        }catch(PDOException $e){
            $errors[] ="Kayit hatasi: ". $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .register-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }
        input:focus {
            border-color: #667eea;
            outline: none;
        }
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-submit {
            background: #667eea;
            color: white;
        }
        .btn-submit:hover {
            background: #5568d3;
        }
        .btn-reset {
            background: #e0e0e0;
            color: #333;
        }
        .error {
            background: #f44336;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .error ul {
            margin: 0;
            padding-left: 20px;
        }
        .success {
            background: #4caf50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        .login-link a {
            color: #667eea;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h1>📝 Kayıt Ol</h1>

    <?php if(!empty($errors)): ?>
        <div class="error">
            <strong>⚠️ Hata:</strong>
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(!empty($success)): ?>
        <div class="success">
            ✅ <?php echo htmlspecialchars($success); ?>
            <br><small>Yönlendiriliyorsunuz...</small>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="username">Kullanıcı Adı *</label>
            <input type="text"
                   id="username"
                   name="username"
                   placeholder="Kullanıcı adınız"
                   value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
                   required>
        </div>

        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email"
                   id="email"
                   name="email"
                   placeholder="email@example.com"
                   value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                   required>
        </div>

        <div class="form-group">
            <label for="password">Şifre * (Min 6 karakter)</label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="Şifreniz"
                   required>
        </div>

        <div class="form-group">
            <label for="password_confirm">Şifre Tekrar *</label>
            <input type="password"
                   id="password_confirm"
                   name="password_confirm"
                   placeholder="Şifrenizi tekrar girin"
                   required>
        </div>

        <input type="submit" value="Kayıt Ol" class="btn btn-submit">
        <input type="reset" value="Temizle" class="btn btn-reset">
    </form>

    <div class="login-link">
        Zaten hesabınız var mı? <a href="login.php">Giriş Yapın</a>
    </div>
</div>

</body>
</html>

