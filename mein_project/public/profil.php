<?php
// Notwendige Dateien und Klassen einbinden
require_once __DIR__ . '/../vendor/autoload.php';

use App\Database;
use App\User;

require_once 'header.php';

// --- SITZUNGSPRÜFUNG (SICHERHEIT) ---
// Wenn die 'benutzer_adi'-Session nicht existiert, also der Benutzer nicht angemeldet ist...
if (!isset($_SESSION['benutzername'])) {
    // ...leite ihn zur Anmeldeseite weiter und stoppe das Skript sofort.
    header('Location: login.php');
    exit();
}

// Benutzernamen aus der Session und weitere Daten aus der Datenbank holen
$benutzername = $_SESSION['benutzername'];
$verbindung = Database::getInstance()->getConnection();
$user_data = User::findByUsername($benutzername, $verbindung);
$profilbild_pfad = $user_data['profilbild'] ?? null;
?>

<h1>Ihre Profilseite</h1>

<?php
// Wenn der Benutzer ein Profilbild hat, zeige es an.
if (!empty($profilbild_pfad)) {
    // Wir müssen sicherstellen, dass der Bildpfad relativ zum public-Ordner korrekt ist.
    // Da unser 'uploads'-Ordner im public-Ordner liegt, können wir ihn direkt schreiben.
    echo "<img src='" . htmlspecialchars($profilbild_pfad) . "' alt='Profilbild' width='150' style='border-radius:50%;'>";
} else {
    echo "<p>Sie haben noch kein Profilbild.</p>";
}
?>

<p>Hallo, <strong><?php echo htmlspecialchars($benutzername); ?></strong>!</p>
<p>Diese Seite kann nur von angemeldeten Benutzern gesehen werden.</p>



<h3>Profilbild ändern</h3>
<form action="bild_upload.php" method="POST" enctype="multipart/form-data">
    <p>
        <label for="profil_bild">Bilddatei auswählen:</label><br>
        <input type="file" id="profil_bild" name="profil_bild">
    </p>
    <p>
        <button type="submit">Hochladen</button>
    </p>
</form>
<hr>
<a href="benutzerliste.php">Registrierte Benutzer anzeigen</a><br>
<a href="logout.php">Abmelden</a>


<?php
require_once 'footer.php';
?>