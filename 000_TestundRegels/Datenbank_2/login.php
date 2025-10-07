<?php
session_start();
require_once 'config.php';
$pdo = getConnection();
$errors = array();
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if (empty($username)) {
        $errors[] = "Kullanici adi bos olamaz!";
    }
    if (empty($password)) {
        $errors[] = "Parola bos olamaz!";

    }
    if (empty($errors)) {
        $sql = "SELECT * FROM users WHERE username =:username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'] ?? 'user';
                $_SESSION['login_time'] = date('Y-m-d H:i:s');
                $success = "Giris basarili! Hosgeldiniz, $username";

                header('Location: dashboard.php');
            } else {
                $errors[] = "Kullanıcı adı veya şifre hatalı!";
            }
        } else {
            $errors[] = 'Kullanıcı adı veya şifre hatalı!';
        }
    }

}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PHP & MySQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .messages {
            margin-bottom: 20px;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
        a{text-decoration: none;}
    </style>
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <div class="messages">
        <?php
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }

        }
        if ($success) {
            echo "<p class='success'>$success</p>";
        }
        ?>
    </div>
    <form method="post" action="">
        <label for="username">Kullanici Adi:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Parola:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Giris Yap">
    </form>

    <div class="register-link">
        Hesabınız yok mu? <a href="register.php">Kayıt Olun</a>
    </div><br><hr><br>
    <div>
        <table>
            <tr>test icin:</tr>
            <tr><td>Kullanici adi:</td><td>ngulen26</td></tr>
            <tr><td>Parola:</td><td>147852</td></tr

        </table>
    </div>

</div>
</body>
</html>

