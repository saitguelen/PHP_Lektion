<?php
require_once 'header.php';
require_once 'Database.php'; // Wir binden unsere neue Klasse ein.

// Mit dem Singleton-Muster holen wir die einzige Instanz des Datenbankobjekts.
$db_instanz = Database::getInstance();
// Von diesem Objekt holen wir die aktive Verbindung.
$verbindung = $db_instanz->getConnection();

// Variablen für Fehlermeldungen und Formulardaten
$fehler = [];
$benutzername = $_POST['benutzername'] ?? '';

// Verarbeiten, wenn das Formular gesendet wurde
if (isset($_POST['registrieren'])) {
    $passwort = $_POST['passwort'] ?? '';
    $passwort_bestaetigung = $_POST['passwort_bestaetigung'] ?? '';

    // --- 1. Validierungsschritte ---
    if (empty(trim($benutzername))) { $fehler[] = "Benutzername darf nicht leer sein."; }
    if (empty($passwort)) { $fehler[] = "Passwort darf nicht leer sein."; }
    if ($passwort !== $passwort_bestaetigung) { $fehler[] = "Die eingegebenen Passwörter stimmen nicht überein."; }

    // Prüfen, ob der Benutzername bereits vergeben ist
    // Diese Prüfung nur durchführen, wenn in den vorherigen Schritten keine Fehler aufgetreten sind
    if (empty($fehler)) {
        $sql_check = "SELECT id FROM benutzer WHERE benutzername = ?";
        $stmt_check = mysqli_prepare($verbindung, $sql_check);
        mysqli_stmt_bind_param($stmt_check, "s", $benutzername);
        mysqli_stmt_execute($stmt_check);
        $ergebnis_check = mysqli_stmt_get_result($stmt_check);
        if (mysqli_num_rows($ergebnis_check) > 0) {
            $fehler[] = "Dieser Benutzername ist bereits vergeben. Bitte wählen Sie einen anderen.";
        }
    }
    
    // --- 2. Registrierungsprozess ---
    if (empty($fehler)) {
        // Alle Prüfungen bestanden, wir können den Benutzer jetzt registrieren.
        
        // Passwort sicher hashen
        $gehashtes_passwort = password_hash($passwort, PASSWORD_DEFAULT);
        
        // Abfrage zum Einfügen in die Datenbank (Prepared Statement)
        $sql_insert = "INSERT INTO benutzer (benutzername, passwort) VALUES (?, ?)";
        $stmt_insert = mysqli_prepare($verbindung, $sql_insert);
        
        // "ss" -> gibt an, dass beide Parameter Strings sind.
        mysqli_stmt_bind_param($stmt_insert, "ss", $benutzername, $gehashtes_passwort);
        
        if (mysqli_stmt_execute($stmt_insert)) {
            // Die Transaktion dauerhaft in die Datenbank schreiben
            mysqli_commit($verbindung); 
            
            if (mysqli_affected_rows($verbindung) === 1) {
                // Alles in Ordnung, Erfolgsmeldung anzeigen und Formular ausblenden
                echo "<div style='color: green; border: 1px solid green; padding: 10px;'>Registrierung erfolgreich! Sie können sich jetzt <a href='login.php'>einloggen</a>.</div>";
                $formular_anzeigen = false; // Das Formular nicht erneut anzeigen
            } else {
                $fehler[] = "Der Registrierungsvorgang konnte nicht in die Datenbank geschrieben werden.";
                $fehler[] = "Datenbankfehler: " . mysqli_error($verbindung);
            }
        } else {
            $fehler[] = "Ein Fehler ist aufgetreten, bitte versuchen Sie es erneut: " . mysqli_error($verbindung);
        }
    }
}

// Zeige das Formular an, wenn Fehler vorhanden sind oder das Formular noch nicht gesendet wurde
if (!isset($formular_anzeigen) || $formular_anzeigen !== false) {
?>

<h1>Neuen Benutzer registrieren</h1>

<?php if (!empty($fehler)): ?>
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
        <strong>Bitte korrigieren Sie die folgenden Fehler:</strong>
        <ul>
            <?php foreach ($fehler as $err): ?>
                <li><?php echo $err; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="register.php" method="POST">
    <p>Benutzername: <input type="text" name="benutzername" value="<?php echo htmlspecialchars($benutzername); ?>"></p>
    <p>Passwort: <input type="password" name="passwort"></p>
    <p>Passwort (Bestätigung): <input type="password" name="passwort_bestaetigung"></p>
    <p><button type="submit" name="registrieren">Registrieren</button></p>
</form>

<?php
} // Schließt den if-Block

// Binden wir footer.php am Ende der Seite ein.
require_once 'footer.php';
?>