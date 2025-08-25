<?php
require_once 'header.php';
require_once 'Database.php'; // Wir binden unsere neue Klasse ein.

// Mit dem Singleton-Muster holen wir die einzige Instanz des Datenbankobjekts.
$db_instanz = Database::getInstance();
// Von diesem Objekt holen wir die aktive Verbindung.
$verbindung = $db_instanz->getConnection();

// Nur eingeloggte Benutzer können diese Seite sehen
if (!isset($_SESSION['benutzer'])) {
    header('Location: login.php');
    exit();
}

$zu_bearbeitende_id = $_GET['id'] ?? null;
$benutzername = '';
$fehler = [];

// --- AKTUALISIERUNGSPROZESS (WENN DAS FORMULAR PER POST GESENDET WURDE) ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $zu_bearbeitende_id = $_POST['id'];
    $benutzername = $_POST['benutzername'];

    // Validierung: Benutzername darf nicht leer sein
    if (empty(trim($benutzername))) {
        $fehler[] = "Benutzername darf nicht leer sein.";
    }

    if (empty($fehler)) {
        $sql = "UPDATE benutzer SET benutzername = ? WHERE id = ?";
        $stmt = mysqli_prepare($verbindung, $sql);
        // "si" -> der erste Parameter ist ein String, der zweite ein Integer
        mysqli_stmt_bind_param($stmt, "si", $benutzername, $zu_bearbeitende_id);
        
        if (mysqli_stmt_execute($stmt)) {
            mysqli_commit($verbindung);
            // Erfolgreich, leite zurück zur Benutzerliste
            header("Location: benutzerliste.php");
            exit();
        } else {
            $fehler[] = "Während der Aktualisierung ist ein Fehler aufgetreten.";
        }
    }
} 
// --- FORMULAR ANZEIGEN (WENN DIE SEITE ZUM ERSTEN MAL AUFGERUFEN WIRD) ---
elseif ($zu_bearbeitende_id && is_numeric($zu_bearbeitende_id)) {
    $sql = "SELECT benutzername FROM benutzer WHERE id = ?";
    $stmt = mysqli_prepare($verbindung, $sql);
    mysqli_stmt_bind_param($stmt, "i", $zu_bearbeitende_id);
    mysqli_stmt_execute($stmt);
    $ergebnis = mysqli_stmt_get_result($stmt);
    if ($zeile = mysqli_fetch_assoc($ergebnis)) {
        $benutzername = $zeile['benutzername'];
    } else {
        $fehler[] = "Benutzer nicht gefunden.";
    }
} else {
    // Ungültige ID
    header('Location: benutzerliste.php');
    exit();
}
?>

<h1>Benutzer bearbeiten</h1>

<?php if (!empty($fehler)): ?>
    <div style="color: red;">
        <ul>
            <?php foreach ($fehler as $err): ?>
                <li><?php echo $err; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="edit_user.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $zu_bearbeitende_id; ?>">
    
    <p>Benutzername: <input type="text" name="benutzername" value="<?php echo htmlspecialchars($benutzername); ?>"></p>
    <p><em>(Die Passwortänderung ist in diesem Formular nicht enthalten.)</em></p>
    <p><button type="submit">Änderungen speichern</button></p>
</form>

<p><a href="benutzerliste.php">Zurück zur Liste</a></p>

<?php
require_once 'footer.php';
?>