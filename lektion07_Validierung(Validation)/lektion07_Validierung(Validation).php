<?php
//Ertellen wir ein Array, um Fehlermeldungen zu speichern

$fehler = [];

//Definieren wir die Variablen für die Formulardaten von Anfang an.
//Der ??-Operator wird verwendet, um einen Standardwert zu setzen, falls die Variable nicht gesetzt ist.
//The ?? operatörü, değişken ayarlanmamışsa varsayılan bir değer ayarlamak için kullanılır.

$benutzername = $_POST['benutzername'] ?? '';
$passwort = $_POST['passwort'] ?? '';

//Prüfen wir, ob das Formular abgeschickt wurde
if (isset($_POST['senden'])) {
    //Validieren wir die Eingaben


 // --- DATENVALIDIERUNG (VALIDATION) ---

 // Überprüfen wir, ob der Benutzername leer ist
    if (empty(trim($benutzername))) {
        $fehler[] = "Der Benutzername darf nicht leer sein.";
    }

    // Überprüfen wir, ob das Passwort leer ist
    if (empty(trim($passwort))) {
        $fehler[] = "Das Passwort darf nicht leer sein.";
    }   

    //--- ERGEBNIS DER VERARBEITUNG ---
    //Wenn das $fehler-Array leer ist, sind keine Fehler aufgetreten
    if (empty($fehler)) {
        //Sichern wir die Eingaben, um XSS-Angriffe zu verhindern
        //...zeigen wr die Erfolgsmeldung an.Das Formular muss nicht mehr anzeigen, da die Daten verarbeitet wurden.
        $benutzername_sicher = htmlspecialchars($benutzername);
        $passwort_sicher = htmlspecialchars($passwort);

        echo "<h1>Willkommen, " . $benutzername_sicher . "!</h1>";
        echo "<p>Login erfolgreich. (Ihr Passwort wird aus Sicherheitsgründen nicht angezeigt.)</p>";
        // An diesem Punkt würden wir den Benutzer normalerweise auf eine andere Seite weiterleiten.
        // Fürs Erste bleiben wir hier.
    }
    // Wenn Fehler vorhanden sind, tun wir nichts. Der Seitenfluss wird fortgesetzt und das HTML-Formular unten angezeigt.
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formularvalidierung</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

    <h1 style="color: blue;" >Bitte einloggen</h1>

     <?php
    // Wenn das $fehler-Array Elemente enthält, listen wir sie auf.
    if (!empty($fehler)) {
        echo '<div class="error">';
        echo '<strong>Bitte korrigieren Sie die folgenden Fehler:</strong>';
        echo '<ul>';
        foreach ($fehler as $err) {
            echo '<li>' . $err . '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>

    <form action ="lektion07_Validierung(Validation).php" method="post">
        <p><b>Benutzername:</b>
            <input type="text" name="benutzername" value="<?php echo htmlspecialchars($benutzername); ?>">
        </p>
        <p><b> Passwort     : </b>
            <input type="password" name="passwort">
        </p>
        <p>
            <button type="submit" name="senden">Einloggen</button>
            <button type="reset">Zurücksetzen</button>
        </p>
     
    </form>
    <hr>
    <h2>Hinweis</h2>
    <p>Dieses Formular verwendet die <strong>POST-Methode</strong>, um die Daten sicher zu übertragen.</p>
    <p>Die Eingaben werden vor der Ausgabe mit <code><strong>htmlspecialchars()</strong></code> gesichert, um XSS-Angriffe zu verhindern.</p>

</body>
</html>

    