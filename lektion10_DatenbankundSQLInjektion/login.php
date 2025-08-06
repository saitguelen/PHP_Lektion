<?php
session_start();

// Unsere Datenbank-Verbindungsinformationen und die Verbindung herstellen
$server = "localhost";
$benutzer = "root";
$passwort = "";
$datenbank = "praktikum_projekt";
$verbindung = mysqli_connect($server, $benutzer, $passwort, $datenbank);

if (!$verbindung) {
    die("Datenbankverbindung fehlgeschlagen: " . mysqli_connect_error());
}

$fehler = [];
$benutzername = $_POST['benutzername'] ?? '';

// Verarbeiten, wenn das Formular gesendet wurde
if (isset($_POST['senden'])) {
    $eingegebenes_passwort = $_POST['passwort'] ?? '';

    // Grundlegende Validierung
    if (empty(trim($benutzername))) {
        $fehler[] = "Das Feld Benutzername darf nicht leer sein.";
    }
    if (empty($eingegebenes_passwort)) {
        $fehler[] = "Das Feld Passwort darf nicht leer sein.";
    }

    // Wenn die grundlegende Validierung keine Fehler findet, die Datenbank prüfen
    if (empty($fehler)) {
        // ---- SICHERE DATENBANKABFRAGE (PREPARED STATEMENT) ----

        // 1. Schritt: SQL-Vorlage erstellen. ? als Platzhalter für Benutzereingaben verwenden.
        $sql = "SELECT id, benutzername, passwort FROM benutzer WHERE benutzername = ?";
        
        // 2. Schritt: Abfrage vorbereiten.
        $stmt = mysqli_prepare($verbindung, $sql);
        
        // 3. Schritt: Parameter binden. 
        // "s" -> gibt an, dass die gesendete Variable ein String ist.
        mysqli_stmt_bind_param($stmt, "s", $benutzername);
        
        // 4. Schritt: Abfrage ausführen.
        mysqli_stmt_execute($stmt);
        
        // 5. Schritt: Ergebnis holen.
        $ergebnis = mysqli_stmt_get_result($stmt);
        
        // 6. Schritt: Ergebnis verarbeiten.
        if (mysqli_num_rows($ergebnis) === 1) {
            // Benutzer gefunden! Jetzt das Passwort prüfen.
            $user = mysqli_fetch_assoc($ergebnis);
            
            if ($eingegebenes_passwort === $user['passwort']) {
                // Passwort ist korrekt! Login erfolgreich.
                $_SESSION['benutzer'] = $user['benutzername'];
                header('Location: profil.php');
                exit();
            } else {
                // Passwort ist falsch.
                $fehler[] = "Benutzername oder Passwort ist falsch.";
            }
        } else {
            // Benutzer nicht gefunden.
            $fehler[] = "Benutzername oder Passwort ist falsch.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Datenbankgestütztes Login</title>
</head>
<body>
    <h1>Bitte einloggen</h1>
    
    <?php if (!empty($fehler)): ?>
        <div style="color: red;">
            <strong>Fehler:</strong>
            <ul>
                <?php foreach ($fehler as $err): ?>
                    <li><?php echo $err; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <p>Benutzername: <input type="text" name="benutzername" value="<?php echo htmlspecialchars($benutzername); ?>"></p>
        <p>Passwort: <input type="password" name="passwort"></p>
        <p><button type="submit" name="senden">EinLogen</button></p>
    </form><br>
    <hr>
    <p>Kurze Zusammenfassung (Kısa Özet)<br>
Wir verwenden nicht länger fest codierte Benutzernamen/Passwörter, <br>
sondern vergleichen sie mit der benutzer-Tabelle in der Datenbank.<br>

Wir fügen Benutzereingaben niemals direkt in SQL-Abfragen ein. Dies würde zu SQL-Injection führen.<br>
Stattdessen verwenden wir Prepared Statements, um die Benutzereingaben sicher an die Datenbank zu übergeben. <br>
Dadurch werden die Eingaben automatisch maskiert und können keine schädlichen SQL-Befehle ausführen.<br>

Um die Sicherheit zu gewährleisten, verwenden wir immer Prepared Statements.<br>

Der Prozess für Prepared Statements besteht aus den Schritten prepare, bind_param, execute und get_result.<br>

Wenn ein Benutzer gefunden wird und das Passwort übereinstimmt, setzen wir die $_SESSION und leiten den Benutzer weiter.<br>

Deine Aufgabe ist es nun, diesen neuen login.php-Code zu erstellen und zu versuchen, <br>
dich mit den Benutzern aus deiner Datenbank (jakob, nesibe, MURAT) einzuloggen. Teste, wie das System reagiert,<br>

Wichtiger Hinweis: Wir vergleichen die Passwörter derzeit als Klartext. Das ist immer noch keine sichere Methode. <br>
In einer unserer nächsten Lektionen zum Thema Sicherheit werden wir lernen, <br>
wie man Passwörter durch Hashing (Verschlüsselung) sicher in der Datenbank speichert.</p>
</body>
</html>
