<?php
//PHP_ode schreiben wir normalarweise ganz oben, vor dem HTML-Tag.

//Zuerts prüfen wir ob das Formular abgeschickt wurde
//Wenn der Button mit name="senden" geklickt wurde, existiert der Schlüssel 'senden' im $_POST-Array

if (isset($_POST['senden'])) {
    //Das Formular wurde gesendet, jetzt holen wir die Daten aus dem $_POST-Array

    //Wir holen die Daten aus dem Input-Feld mit name="benutzername"
    $benutzername = $_POST['benutzername'];

    //Wir holen die Daten aus dem Input-Feld mit name="passwort"
    $passwort = $_POST['passwort'];

    //SICHERHEITHINWEIS: Gib Benutzereingaben niemals direkt aus, ohne sie zu validieren oder zu filtern.
    //Hier könnten wir eine Validierung oder Filterung der Eingaben vornehmen, um Sicherheitsrisiken zu vermeiden.

    //Die Funktion htmlspecialchars() wandelt Sonderzeichen in HTML-Entities um, um XSS-Angriffe zu verhindern.
    $benutzername_sicher = htmlspecialchars($benutzername);
    $passwort_sicher = htmlspecialchars($passwort);

    echo "<h1>Willkommen, " . $benutzername_sicher . "!</h1>";
    echo "<p>Login erfolgreich. (Ihr Passwort wird aus Sicherheitsgründen nicht angezeigt.)</p>";
    echo "<hr>";
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulardaten</title>
</head>
<body>
    <h1>Bitte einloggen</h1>

    <form action="lektion06_Formulare_GET_POST.php" method="post">
        <p>
            Benutzername:
            <input type=""text" name="benutzername" required>
        </p>
        <p>
            Passwort:
            <input type="password" name="passwort" required>    

        </p>
        <p>
            <button type ="submit" name="senden">Einloggen</button>
        </p>
        <p>
            <button type="reset">Zurücksetzen</button>
        </p>
        </form>

    <hr>
    <h2>Hinweis</h2>
    <p>Dieses Formular verwendet die POST-Methode, um die Daten sicher zu übertragen.</p>   
    <p>Die Daten werden nicht in der URL angezeigt, sondern im HTTP-Body gesendet.</p>
    <p>Die Eingaben werden vor der Ausgabe mit <code>htmlspecialchars()</code> gesichert, um XSS-Angriffe zu verhindern.</p>
</body>
</html>