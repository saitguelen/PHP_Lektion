<?php
// Notwendige Dateien und Klassen einbinden
require_once __DIR__ . '/../vendor/autoload.php';
use App\Database;

// header.php einbinden (enthält session_start())
require_once 'header.php';

// --- SITZUNGSPRÜFUNG (SICHERHEIT) ---
if (!isset($_SESSION['benutzername'])) {
    header('Location: login.php');
    exit();
}

// Datenbankverbindung holen
$verbindung = Database::getInstance()->getConnection();
?>

<h1>Registrierte Benutzer</h1>
<p>Unten sehen Sie eine Liste aller in der Datenbank registrierten Benutzer.</p>

<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Benutzername</th>
            <th>E-Mail</th>
            <th>Profil Bild</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // ---- Alle Benutzer aus der Datenbank abrufen ----
        $sql = "SELECT id, benutzername, email,profilbild FROM benutzer ORDER BY id ASC";
        $ergebnis = $verbindung->query($sql);

        if ($ergebnis->num_rows > 0) {
            // Ergebnisse Zeile für Zeile durchgehen und in die Tabelle schreiben
            while ($zeile = $ergebnis->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $zeile['id'] . "</td>";
                echo "<td>" . htmlspecialchars($zeile['benutzername']) . "</td>";
                echo "<td>" . htmlspecialchars($zeile['email']) . "</td>";
                echo "<td>" . htmlspecialchars($zeile['profilbild']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Keine Benutzer gefunden.</td></tr>";
        }
        ?>
    </tbody>
</table>

<p style="margin-top: 20px;"><a href="profil.php">Zurück zur Profilseite</a></p>

<?php
// Unteren Teil der Benutzeroberfläche einbinden
require_once 'footer.php';
?>