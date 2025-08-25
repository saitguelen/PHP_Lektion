<?php
// Zuerst den Header einbinden (session_start() ist hier drin)
require_once 'header.php';
// Unsere Datenbankverbindung einbinden
require_once 'db_verbindung.php';

// --- SITZUNGSPRÜFUNG ---
// Wenn die 'benutzer'-Session nicht existiert, also der Benutzer nicht eingeloggt ist...
if (!isset($_SESSION['benutzer'])) {
    // ...leite ihn zur Login-Seite weiter und beende das Skript.
    header('Location: login.php');
    exit();
}
?>

<h1>Registrierte Benutzer</h1>
<p>Unten sehen Sie eine Liste aller in der Datenbank registrierten Benutzer.</p>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Benutzername</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // ---- DATEN AUS DER DATENBANK ABRUFEN ----
        $sql = "SELECT id, benutzername FROM benutzer ORDER BY id ASC";
        $ergebnis = mysqli_query($verbindung, $sql);

        if (mysqli_num_rows($ergebnis) > 0) {
            // Die Ergebnisse Zeile für Zeile abrufen und in die Tabelle schreiben
            while ($zeile = mysqli_fetch_assoc($ergebnis)) {
                echo "<tr>";
                echo "<td>" . $zeile['id'] . "</td>";
                echo "<td>" . htmlspecialchars($zeile['benutzername']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Keine Benutzer gefunden.</td></tr>";
        }

        // Verbindung schließen
        mysqli_close($verbindung);
        ?>
    </tbody>
</table>

<p style="margin-top: 20px;"><a href="profil.php">Zurück zur Profilseite</a></p>

<?php
// Den Footer einbinden
require_once 'footer.php';
?>