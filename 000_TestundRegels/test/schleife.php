<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $zahl = intval($_POST['zahl']);
    $versuche = 0;
    $maxVersuche = 10;
    $gefunden = false;

    echo "<div style='background-color: #f0f0f0; padding: 15px; margin: 20px 0; border-radius: 5px;'>";
    echo "<h3>Oyun Sonuçları:</h3>";
    
    while($versuche < $maxVersuche){
        $zufallsZahl = rand(1, 20);
        $versuche++;
        if($zufallsZahl < $zahl){
            echo "<p>Versuch $versuche: Die Zahl $zufallsZahl ist zu klein.</p>";
        }elseif($zufallsZahl > $zahl){
            echo "<p>Versuch $versuche: Die Zahl $zufallsZahl ist zu groß.</p>";
        }else{
            $gefunden = true;
            break;
        }
    }

    if($gefunden){
        echo "<h2 style='color: green;'>🎉 Glückwunsch! Sie haben die Zahl $zahl in $versuche Versuchen gefunden.</h2>";
    }else{
        echo "<h2 style='color: red;'>❌ Leider wurde die Zahl $zahl nach $maxVersuche Versuchen nicht gefunden.</h2>";
    }
    
    echo "</div>";
    
    // Tekrar oynama seçeneği
    echo "<div style='text-align: center; margin: 20px 0;'>";
    echo "<h3>Tekrar oynamak istiyor musunuz?</h3>";
    echo "<a href='" . $_SERVER['PHP_SELF'] . "' style='background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin: 5px;'>🔄 Yeni Oyun</a>";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayı Tahmin Oyunu - PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .game-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        form {
            background-color: #e8f4fd;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 5px;
            width: 200px;
        }
        input[type="submit"], input[type="reset"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        input[type="reset"] {
            background-color: #6c757d;
            color: white;
        }
        input[type="reset"]:hover {
            background-color: #545b62;
        }
    </style>
</head>

<body>
    <div class="game-container">
        <h1>🎯 Sayı Tahmin Oyunu</h1>
        
        <?php if(!$_POST): ?>
        <div>
            <h2>Oyun Kuralları:</h2>
            <ul>
                <li>🤔 1 ile 20 arasında bir sayı düşünün</li>
                <li>💻 Bilgisayar bu sayıyı en fazla 10 denemede tahmin etmeye çalışacak</li>
                <li>🎲 Her deneme rastgele yapılır</li>
                <li>🏆 Sayı bulunursa kazanırsınız!</li>
            </ul>
        </div>
        <?php endif; ?>

        <form method="post" action="">
            <h3>Lütfen 1-20 arası bir sayı girin:</h3>
            <input type="number" name="zahl" min="1" max="20" required placeholder="Sayınızı girin...">
            <br><br>
            <input type="submit" value="🚀 Oyunu Başlat">
            <input type="reset" value="🔄 Temizle">
        </form>

        <?php if($_POST): ?>
        <div style="margin-top: 30px; text-align: center;">
            <p><em>İpucu: Farklı bir sayı deneyin ve şansınızı test edin! 🍀</em></p>
        </div>
        <?php endif; ?>
    </div>
</body>

</html>