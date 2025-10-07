<?php
session_start();
require_once 'config.php';
$pdo = getConnection();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
    header('Location: login.php');
    exit;
}
if(empty($errors)){
    $sql= "SELECT  * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $_SESSION['user_id']]);
    $user = $stmt->fetch();


}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PHP & MySQL</title>
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
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <p>Willkommen, <?php echo htmlspecialchars($user['username']); ?>!</p>
        <p>Ihre E-Mail: <?php echo htmlspecialchars($user['email']); ?></p>
        <p>Rolle: <?php echo htmlspecialchars($user['role'] ?? 'user'); ?></p>
        <!--<p>Letzter Login: <?php echo htmlspecialchars($user['login_time']); ?></p>-->
        <p><a href="logout.php">Logout</a></p>
        <p> <a href ="register.php">Yeni kullanici kaydi icin tiklayiniz</a></p>
        <p><a href ="login.php">Kullanici girisi yapmak icin tiklayiniz</a></p>
    </div>
</body>
</html>
