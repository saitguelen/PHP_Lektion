<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preis vom Benutzer mit return Funktion erhalten</title>
</head>
<body>
    <div style="background-color: aquamarine; border: 10px;">
        <form method = "post">
            <label>Produktname</label>
            <input type="text" name="produktname" required><br>

            <label>Preis</label>
            <input type="number" name="preis" step="0.01" required><br>

            <label>Rabatt</label>
            <input type="number" name="rabatt" required><br>

            <input type="submit" name="Berechen"><br>

        </form>
    </div>

    <?php

    function rabattPreis($preis,$rabatt){
        return $preis - ($preis * $rabatt / 100);
    }

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") { //Eğer kullanıcı formu gönderdi ise, yani bir veri yolladıysa, bu kodu çalıştır.’ 
    $produktname = $_POST["produktname"]; //"POST": Kullanıcı formu doldurup “Gönder” tuşuna bastığında oluşan yöntemdir.
    $preis = $_POST["preis"];
    $rabatt = $_POST["rabatt"];

    $endpreis=rabattPreis($preis,$rabatt);
    echo "<p>Das Produkt <strong>$produktname</strong> kostet <em>$preis </em> aber nach $rabatt% Rabatt: <strong>$endpreis €</strong></p>";
    }
    echo "Das Produkt <strong>"  .$produktname . "</strong> kostet :<br/> ";
    echo "Endpreis nach Rabatt: $endpreis €";
    

    


?>


    
    
</body>
</html>