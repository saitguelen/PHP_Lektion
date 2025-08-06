<?php
// session_start() ist bereits in header.php.
include 'header.php';

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
            
           // ALTER CODE: if ($eingegebenes_passwort === $user['passwort']) {
            // NEUER SICHERER CODE:
            if (password_verify($eingegebenes_passwort, $user['passwort'])) {
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
        <p><button type="submit" name="senden">Login</button>
           <button type="reset">Zurücksetzen</button></p>
    </form><br>
    <hr>
    <p>Kurze Zusammenfassung<br>

Passwörter dürfen niemals im Klartext in der Datenbank gespeichert werden.<br>

Für die sichere Speicherung wird ein einseitiger Verschlüsselungsprozess namens Hashing verwendet.<br>

Alte Hashing-Funktionen wie md5() und sha1() sind nicht mehr sicher.<br>

Der moderne und sichere Weg in PHP ist die Verwendung von <code>password_hash()</code> <br>
zum Erstellen von Hashes und <code>password_verify()</code> zum Überprüfen.<br>

Die Funktion <code>password_hash()</code> kümmert sich automatisch und sicher um das "Salting", <br>
was das Knacken von Passwörtern extrem erschwert.</p><hr>
<p>Zusätzliche Informationen:   <br>
Kurze Zusammenfassung <br>
<strong>include</strong> und <strong>require</strong> werden verwendet, um den Inhalt einer PHP-Datei in eine andere einzufügen.<br>

Diese Methode hilft, Code-Duplizierung zu vermeiden und macht Projekte organisierter, modularer und leichter wartbar.<br>

<strong></strong>require</strong> wird für essenzielle Dateien verwendet (wie Datenbankverbindungen), da es das Skript stoppt, wenn die Datei fehlt.<br>

<strong></strong>include</strong> wird für nicht-essenzielle Inhalte verwendet, bei denen das Programm auch ohne sie weiterlaufen soll.<br>

Das Erstellen von wiederverwendbaren Teilen wie header.php und footer.php ist eine grundlegende Praxis <br>
der professionellen PHP-Entwicklung.<br>

Deine Aufgabe ist es nun, die Dateien header.php und footer.php zu erstellen und <br>
anschließend deine Dateien login.php und profil.php so anzupassen, dass sie diese neue Struktur verwenden. <br>
Stelle danach sicher, dass alles noch wie zuvor funktioniert.<br>

Nachdem du diese Struktur aufgebaut hast, werden wir in unserer nächsten Lektion ein neues Feature hinzufügen, <br>
das alles bisher Gelernte kombiniert: die Erstellung eines Registrierungsformulars für neue Benutzer.</p><br><hr>
<img src="passwort_liste.png" alt="Passwort Liste">
<?php
// Wir binden footer.php ganz am Ende ein.
include 'footer.php';
?>
