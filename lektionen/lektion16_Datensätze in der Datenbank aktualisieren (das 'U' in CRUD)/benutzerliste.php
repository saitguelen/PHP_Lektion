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
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT id, benutzername FROM benutzer ORDER BY id ASC";
        $ergebnis = mysqli_query($verbindung, $sql);

        if (mysqli_num_rows($ergebnis) > 0) {
            while ($zeile = mysqli_fetch_assoc($ergebnis)) {
                echo "<tr>";
                echo "<td>" . $zeile['id'] . "</td>";
                echo "<td>" . htmlspecialchars($zeile['benutzername']) . "</td>";

                // --- NEUE AKTIONS-ZELLE ---
                echo "<td>";
                // Selbst-Bearbeitungsprüfung (obwohl wir es hier erlauben)
                if ($_SESSION['benutzer'] !== $zeile['benutzername']) {
                    $bestaetigung_msg = "Sind Sie sicher, dass Sie diesen Benutzer löschen möchten?";
                    // NEUER BEARBEITEN-LINK
                    echo "<a href='edit_user.php?id=" . $zeile['id'] . "'>Bearbeiten</a> | ";
                    echo "<a href='delete_user.php?id=" . $zeile['id'] . "' onclick=\"return confirm('" . $bestaetigung_msg . "');\">Löschen</a>";
                } else {
                    echo "<a href='edit_user.php?id=" . $zeile['id'] . "'>Bearbeiten</a> (Eigenes Konto)";
                }
                echo "</td>";
                // --- ENDE DER NEUEN ZELLE ---
                // Aktualisiere die <td>-Zelle in benutzerliste.php wie folgt



                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Keine Benutzer gefunden.</td></tr>";
        }
        ?>
    </tbody>
</table>

<p style="margin-top: 20px;"><a href="profil.php">Zurück zur Profilseite</a></p>

<?php
// Den Footer einbinden
require_once 'footer.php';
?>