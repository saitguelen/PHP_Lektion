<?php
// Schritt 1: Notwendige Dateien einbinden
// Die autoload-Datei von Composer wird automatisch die "src/User.php"-Datei finden und einbinden,
// wenn eine Klasse wie "App\User" aufgerufen wird.
// Der Ausdruck __DIR__ . '/../' bedeutet, vom aktuellen Verzeichnis einen Ordner nach oben zu gehen.
require_once __DIR__ . '/../vendor/autoload.php';

// Wir deklarieren die Klassen, die wir verwenden werden, mit "use". Das macht den Code lesbarer.
use App\Database;
use App\User;

// Wir binden den oberen Teil unserer Oberfläche ein (HTML-Anfang, Titel, session_start() etc.).
require_once 'header.php';


// Schritt 2: Notwendige Variablen vorbereiten
$fehler = []; // Array zum Speichern von Fehlermeldungen.
// Wir verwenden "?? ''", um Fehler zu vermeiden, wenn die Daten aus dem Formular noch nicht vorhanden sind.
$benutzername = $_POST['benutzername'] ?? '';
$email = $_POST['email'] ?? '';


// Schritt 3: Prüfen, ob das Formular abgeschickt wurde
// Die Überprüfung der Anfragemethode auf 'POST' ist die zuverlässigste Methode.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Die restlichen Daten aus dem Formular entgegennehmen
    $passwort = $_POST['passwort'] ?? '';
    $passwort_bestaetigung = $_POST['passwort_bestaetigung'] ?? '';

    // Schritt 3a: Datenvalidierung (Validation)
    if (empty(trim($benutzername))) {
        $fehler[] = "Benutzername darf nicht leer sein.";
    }
    if (empty(trim($email))) {
        $fehler[] = "E-Mail darf nicht leer sein.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $fehler[] = "Bitte geben Sie eine gültige E-Mail-Adresse ein.";
    }
    if (empty($passwort)) {
        $fehler[] = "Passwort darf nicht leer sein.";
    }
    if ($passwort !== $passwort_bestaetigung) {
        $fehler[] = "Die eingegebenen Passwörter stimmen nicht überein.";
    }

    // Schritt 3b: Datenbankprüfungen (nur wenn die erste Validierung fehlerfrei war)
    if (empty($fehler)) {
        // Datenbankverbindung holen
        $verbindung = Database::getInstance()->getConnection();

        // Mit der User-Klasse prüfen, ob der Benutzername bereits vergeben ist
        if (User::findByUsername($benutzername, $verbindung)) {
            $fehler[] = "Dieser Benutzername ist bereits vergeben. Bitte wählen Sie einen anderen.";
        } else {
            // Schritt 3c: Benutzer erstellen
            // Den neuen Benutzer mit der User-Klasse in die Datenbank speichern
            if (User::create($benutzername, $email, $passwort, $verbindung)) {
                // Wenn alles erfolgreich war, eine Erfolgsmeldung anzeigen und das Formular ausblenden
                echo "<div class='success'>Registrierung erfolgreich! Sie können sich jetzt <a href='login.php'> <strong><em> einloggen </strong></em></a>.</div>";
                $formular_anzeigen = false;
            } else {
                $fehler[] = "Bei der Registrierung ist ein Datenbankfehler aufgetreten.";
            }
        }
    }
}

// Schritt 4: Das Formular auf dem Bildschirm ausgeben
// Das Formular anzeigen, wenn es noch nicht abgeschickt wurde ODER ein Fehler aufgetreten ist ODER die Registrierung nicht erfolgreich war.
if (!isset($formular_anzeigen) || $formular_anzeigen !== false) {
?>

    <h1>Neuen Benutzer registrieren</h1>

    <?php if (!empty($fehler)): ?>
        <div class="error">
            <strong>Bitte korrigieren Sie die folgenden Fehler:</strong>
            <ul>
                <?php foreach ($fehler as $err): ?>
                    <li><?php echo $err; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="register.php" method="POST">
        <p>
            <label for="benutzername">Benutzername:</label><br>
            <input type="text" id="benutzername" name="benutzername" value="<?php echo htmlspecialchars($benutzername); ?>">
        </p>
        <p>
            <label for="email">E-Mail:</label><br>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        </p>
        <p>
            <label for="passwort">Passwort:</label><br>
            <input type="password" id="passwort" name="passwort">
        </p>
        <p>
            <label for="passwort_bestaetigung">Passwort (Bestätigung):</label><br>
            <input type="password" id="passwort_bestaetigung" name="passwort_bestaetigung">
        </p>
        <p>
            <button type="submit">Registrieren</button>
        </p>
    </form>

<?php
} // schließt den if-Block

// Wir binden den unteren Teil unserer Oberfläche ein (HTML-Ende).
require_once 'footer.php';
?>