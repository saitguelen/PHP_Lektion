<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taschenrechner</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 50px auto; padding: 20px; }
        form { background: #f4f4f4; padding: 20px; border-radius: 8px; }
        input, select { width: 100%; padding: 10px; margin: 5px 0 15px 0; box-sizing: border-box; }
        .result { background: #4CAF50; color: white; padding: 15px; margin: 20px 0; border-radius: 5px; }
        .error { background: #f44336; color: white; padding: 15px; margin: 20px 0; border-radius: 5px; }
    </style>
</head>
<body>

<h1>Taschenrechner</h1>

<form action="" method="post">
    <label for="number1">Zahl 1:</label>
    <input type="number" step="any" id="number1" name="number1" placeholder="Erste Zahl eingeben" required>

    <label for="number2">Zahl 2:</label>
    <input type="number" step="any" id="number2" name="number2" placeholder="Zweite Zahl eingeben" required>

    <label for="vorgang">Vorgang:</label>
    <select name="vorgang" id="vorgang" required>
        <option value="">Wählen Sie einen Vorgang</option>
        <option value="add">Addition (+)</option>
        <option value="sub">Subtraktion (-)</option>
        <option value="mul">Multiplikation (×)</option>
        <option value="div">Division (÷)</option>
    </select>

    <input type="submit" value="Berechnen">
    <input type="reset" value="Zurücksetzen">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['vorgang'])) {

        if(!empty($_POST['number1']) && !empty($_POST['number2']) && !empty($_POST['vorgang'])){

            // Güvenli veri alma
            $number1 = floatval($_POST['number1']);
            $number2 = floatval($_POST['number2']);
            $vorgang = htmlspecialchars($_POST['vorgang']);

            $result = 0;
            $operator = '';
            $error = false;

            switch($vorgang){
                case 'add':
                    $result = $number1 + $number2;
                    $operator = '+';
                    break;
                case 'sub':
                    $result = $number1 - $number2;
                    $operator = '-';
                    break;
                case 'mul':
                    $result = $number1 * $number2;
                    $operator = '×';
                    break;
                case 'div':
                    if($number2 != 0){
                        $result = $number1 / $number2;
                        $operator = '÷';
                    }else{
                        echo "<div class='error'>⚠️ Fehler: Division durch Null ist nicht möglich!</div>";
                        $error = true;
                    }
                    break;
                default:
                    echo "<div class='error'>⚠️ Bitte einen gültigen Vorgang wählen!</div>";
                    $error = true;
            }

            if(!$error){
                echo "<div class='result'>";
                echo "<h3>Ergebnis:</h3>";
                echo "<h2>$number1 $operator $number2 = " . round($result, 2) . "</h2>";
                echo "</div>";
            }

        }else{
            echo "<div class='error'>⚠️ Bitte alle Felder ausfüllen!</div>";
        }
    }
}


/*📝 GÖREV 6: Form İşleme ($_POST / $_GET)
Şimdi PHP'nin en önemli özelliği: Kullanıcıdan veri alma!
Senaryo: Basit bir hesap makinesi
İstenenler:

Bir HTML formu oluştur (aynı dosyada)
2 sayı input'u ve bir işlem seçimi (dropdown: +, -, *, /)
Form submit edilince sonucu göster
Form boşsa veya hatalıysa uyarı ver

İpuçları:

$_POST veya $_GET kullan
isset() ile kontrol yap
empty() ile boş kontrol*/

?>

</body>
</html>