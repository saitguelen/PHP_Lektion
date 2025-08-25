<?php
// Wir binden die notwendigen Klassen und den Header ein.
require_once 'header.php';
require_once 'Database.php';
require_once 'User.php'; // Wir binden unsere neue User-Klasse ein

// Wir holen unsere Datenbankverbindung.
$db_instanz = Database::getInstance();
$verbindung = $db_instanz->getConnection();

$fehler = [];
$benutzername = $_POST['benutzername'] ?? '';

// Block, der nur ausgeführt wird, wenn das Formular gesendet wurde.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $eingegebenes_passwort = $_POST['passwort'] ?? '';

    // Grundlegende Validierung
    if (empty(trim($benutzername))) {
        $fehler[] = "Benutzername darf nicht leer sein.";
    }
    if (empty($eingegebenes_passwort)) {
        $fehler[] = "Passwort darf nicht leer sein.";
    }

    if (empty($fehler)) {
        // ---- NEUE OOP-LOGIK ----
        // 1. Suche den Benutzer in der Datenbank.
        $user_data = User::findByUsername($benutzername, $verbindung);

        // 2. Prüfe, ob der Benutzer gefunden wurde UND das Passwort korrekt ist.
        if ($user_data && password_verify($eingegebenes_passwort, $user_data['passwort'])) {
            // Login erfolgreich!
            $_SESSION['benutzer'] = $user_data['benutzername'];
            header('Location: profil.php');
            exit();
        } else {
            // Benutzer nicht gefunden ODER Passwort falsch.
            // Aus Sicherheitsgründen geben wir in beiden Fällen dieselbe allgemeine Fehlermeldung aus.
            $fehler[] = "Benutzername oder Passwort ist falsch.";
        }
    }
}
?>

<h1>Bitte einloggen</h1>

<?php if (!empty($fehler)): ?>
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
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
    <p><button type="submit" name="senden">Login</button></p>
</form>

<?php
require_once 'footer.php';
?>