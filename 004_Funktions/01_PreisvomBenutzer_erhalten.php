<!DOCTYPE html>
<html lang="en,de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preis vom Benutzer erhalten</title>
</head>
<body>
    <form method="post">
        <label>Produktname</label>
        <input type="text" name="produktname" required><br>

        <label>Preis (€)</label>
        <input type="number" name="preis" step="0.01" required><br>

        <label>Rabatt (%)</label>
        <input type="number" name="rabatt" required><br>

        <input type="submit" value="Berechnen">
        <input type="reset" value="Zurücksetzen">
    </form>
    <?php

    function berechne($produktname, $preis, $rabatt) {
        $reduziert = $preis - ($preis * $rabatt / 100);
        
        echo "<p>Das Produkt <strong>$produktname</strong> kostet nach $rabatt% Rabatt: <strong>$reduziert €</strong></p>";
    }

    
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Eğer kullanıcı formu gönderdi ise, yani bir veri yolladıysa, bu kodu çalıştır.’ 
    $produktname = $_POST["produktname"]; //"POST": Kullanıcı formu doldurup “Gönder” tuşuna bastığında oluşan yöntemdir.
    $preis = $_POST["preis"];
    $rabatt = $_POST["rabatt"];

    berechne($produktname, $preis, $rabatt);

    /*
Um zu vermeiden, dass beim ersten Öffnen der Seite ein Fehler auftritt.
Um eine Verarbeitung ohne Formulardaten zu vermeiden.
Für eine sichere und kontrollierte Datenverarbeitung.
if (...): Mit diesem Steuerelement wird die Verarbeitung nur durchgeführt, wenn das Formular abgeschickt wird, nicht wenn die Seite zum ersten Mal geöffnet wird.
if (...): Bu kontrol sayesinde, sayfa ilk açıldığında değil, sadece form gönderildiğinde işlem yapılır.

*/

    
}





    ?>
</body>
</html>