<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preis vom Benutzer mit Variable Funktion zuweisen</title>


</head>

<body>
    <form method="post">
        <label>Produktname</label>
        <input type="text" name="produktname" required><br>

        <label>Produkt Preis</label>
        <input type="number" name="preis" required><br>

        <label>Produkt Rabatt</label>
        <input type="number" name="rabatt" required><br>

        <input type="submit" name="Berechnen">
        <input type="reset" name="Zurücksenden">


    </form>
    <?php

    function produktInfo($produktname, $preis,$rabatt)
    {
        echo "Das Produkt $produktname kostet $preis und hat $rabatt  Produktrabatt.";
    }



    function produktRechne($preis, $rabatt)
    {
        $endpreis = $preis - ($preis * $rabatt / 100);
        echo "Das Produkt nach Rabatt $endpreis €.<br>";
    }



    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $produktname = $_POST["produktname"];
        $preis = $_POST["preis"];
        $rabatt = $_POST["rabatt"];

        $funktionInfo = "produktInfo";
        $funktionInfo($produktname, $preis, $rabatt);

        $funktionRechnung = "produktRechne";
        $funktionRechnung($preis, $rabatt);
    }

    ?>


</body>
</html>