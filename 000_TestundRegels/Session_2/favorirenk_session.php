<?php
session_start();
if(isset($_POST['renk'])){
    $_SESSION['favori_renk'] = $_POST['renk'];
}

$renk = $_SESSION['favori_renk'] ?? '#ffffff'; // Varsayılan beyaz
?>
!<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favori Renk Seçimi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: <?php echo htmlspecialchars($renk); ?>;
            transition: background-color 0.5s;
        }
        .color-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type="color"] {
            width: 100%;
            height: 50px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 12px 24px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #5568d3;
        }
    </style>
</head>
<body>
<div class="color-form">
    <h1>Favori Renginizi Seçin</h1>
    <form method="post" action="">
        <input type="color" name="renk" value="<?php echo htmlspecialchars($renk); ?>" required>
        <br>
        <input type="submit" value="Rengi Kaydet">
    </form>
</html>
