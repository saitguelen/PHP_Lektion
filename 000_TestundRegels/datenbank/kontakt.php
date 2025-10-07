<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nachricht Formular</title>
</head>
<body>
    <h1> Kontaktformular</h1>
    <!-- form action="senden.php" method="post" oder benutzen wir das wenn wir die Daten verarbeiten wollen -->
    <form method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" required><br><br>
        E-mail: <input type="email" name="email" required><br><br>
        Nachricht: <textarea rows="5" cols="50" name="nachricht"></textarea><br><br>
        <input type="file" name="datei"><br><br>
        <input type="submit" value="Speichern">
        <input type="reset" value="Zurücksenden">
    </form>
    

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['nachricht']);


echo "<h1> Danke, $name ! </h1>";
echo "<p> Ihre E-Mail Adresse: $email </p>";
echo "<p> Ihre Nachricht : $message </p>";
echo "<p>Ihre Formulardaten wurden erfolgreich empfangen.</p>";
    if(isset($_FILES['datei']) && $_FILES['datei']['error'] === UPLOAD_ERR_OK){
        $dateiTmpPfad = $_FILES['datei']['tmp_name'];
        $dateiName = $_FILES['datei']['name'];
        $dateiGroesse = $_FILES['datei']['size'];
        $dateiTyp = $_FILES['datei']['type'];

        $zielVerzeichnis = "images/";
        if(!is_dir($zielVerzeichnis)){
            mkdir($zielVerzeichnis, 0755, true);
        }
        $zielPfad = $zielVerzeichnis . basename($dateiName);

        if(move_uploaded_file($dateiTmpPfad, $zielPfad)){
            echo "<p>Die Datei wurde erfolgreich hochgeladen: <a href='$zielPfad'>$dateiName</a></p>";
            echo "<p>Dateityp: $dateiTyp</p>";
            echo "<p>Dateigröße: " . round($dateiGroesse / 1024, 2) . " KB</p>";
            echo "<p>Hochgeladen am: " . date("Y-m-d H:i:s") . "</p>";
            echo "<p> Bild name $dateiName </p>";
            echo "<img src='$zielPfad' alt='Hochgeladenes Bild' style='max-width:300px;'><br>";
        }else{
            echo "<p>Fehler beim Hochladen der Datei.</p>";
        }
    }
}else{
    echo "Sie sind nicht berechtigt, direkt auf diese Seite zuzugreifen.";

}

?>