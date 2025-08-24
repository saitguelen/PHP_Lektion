<?php
// Wir binden den Autoloader von Composer und unsere grundlegenden Klassen ein.
require_once __DIR__ . '/../vendor/autoload.php';

use App\Database;
use App\User;

//Wir binden den oberen Teil unserer Benutzeroberfläche ein.

require_once 'header.php';

//wir holen unseren Datenbankverbindun auf die OOP-Weise
$verbindung = Database::getInstance()->getConnection();

$fehler = [];
$benutzername = $_POST['benutzername'] ?? '';

//Wenn das Formular abgeschickt wurde...
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $eingegebenes_passwort = $_POST['passwort'] ?? '';

    //Grundlegende Validierung
    if (empty(trim($benutzername)) || empty($eingegebenes_passwort)) {
        $fehler[] = "Benutzername und passwort dürfen nicht leer sein.";
    }
    if (empty($fehler)) {
        // --- NEUE OOP-LOGIK ---
        // 1. Den Benutzer mit der User-Klasse in der Datenbank suchen.
        $user_data = User::findByUsername($benutzername, $verbindung);

        // 2. Prüfen, ob der Benutzer gefunden wurde UND das Passwort korrekt ist.
        // Die Funktion password_verify() vergleicht das eingegebene Passwort mit dem Hash aus der Datenbank.
        if ($user_data && password_verify($eingegebenes_passwort, $user_data['passwort'])) {
            // Login erfolgreich! Speichern wir den Benutzernamen in der Session.
            $_SESSION['benutzername'] = $user_data['benutzername'];
            // Leiten wir den Benutzer zur geschützten Profilseite weiter.
            header('Location: profil.php');
            exit(); // Es ist wichtig, die Skriptausführung nach einer Weiterleitung zu stoppen.
        } else {
            // Benutzer nicht gefunden ODER Passwort falsch.
            // Aus Sicherheitsgründen geben wir in beiden Fällen dieselbe allgemeine Fehlermeldung aus.
            $fehler[] = "Benutzername oder Passwort ist falsch.";
        }
    }
}

?>

<h1>Anmelden</h1>

<?php if (!empty($fehler)): ?>
    <div class="error">
        <ul>
            <?php foreach ($fehler as $err): ?>
                <li><?php echo $err; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="login.php" method="POST">
    <p>
        <label for="benutzername">Benutzername:</label><br>
        <input type="text" id="benutzername" name="benutzername" value="<?php echo htmlspecialchars($benutzername); ?>">
    </p>
    <p>
        <label for="passwort">Passwort:</label><br>
        <input type="password" id="passwort" name="passwort">
    </p>
    <p>
        <button type="submit">Anmelden</button>
    </p>
</form>

<p>Noch kein Konto? <a href="register.php">Jetzt registrieren!</a></p>

<?php
// Wir binden den unteren Teil unserer Benutzeroberfläche ein.
require_once 'footer.php';
?>