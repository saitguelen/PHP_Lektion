<?php
require_once 'header.php';
require_once 'Database.php';
require_once 'User.php'; // Wir binden unsere neue User-Klasse ein

$db_instanz = Database::getInstance();
$verbindung = $db_instanz->getConnection();

$fehler = [];
$benutzername = $_POST['benutzername'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $passwort = $_POST['passwort'] ?? '';
    $passwort_bestaetigung = $_POST['passwort_bestaetigung'] ?? '';

    // Die Validierungen bleiben gleich
    if (empty(trim($benutzername))) { $fehler[] = "Benutzername darf nicht leer sein."; }
    if (empty($passwort)) { $fehler[] = "Passwort darf nicht leer sein."; }
    if ($passwort !== $passwort_bestaetigung) { $fehler[] = "Die eingegebenen Passwörter stimmen nicht überein."; }
    
    // Wenn die Validierungen in Ordnung sind...
    if (empty($fehler)) {
        // DIE PRÜFUNG DES BENUTZERNAMENS ERFOLGT JETZT DURCH DIE User-KLASSE
        if (User::findByUsername($benutzername, $verbindung)) {
            $fehler[] = "Dieser Benutzername ist bereits vergeben.";
        } else {
            // DER REGISTRIERUNGSPROZESS ERFOLGT JETZT DURCH DIE User-KLASSE
            if (User::create($benutzername, $passwort, $verbindung)) {
                echo "<div style='color: green;'>Registrierung erfolgreich! Sie können sich jetzt <a href='login.php'>einloggen</a>.</div>";
                $formular_anzeigen = false;
            } else {
                $fehler[] = "Bei der Registrierung ist ein Fehler aufgetreten.";
            }
        }
    }
}

if (!isset($formular_anzeigen) || $formular_anzeigen !== false) {
?>
    <h1>Neuen Benutzer registrieren</h1>
    <?php
}
require_once 'footer.php';
?>