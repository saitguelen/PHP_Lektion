<?php
// Wir binden header.php ein (session_start() ist darin enthalten)
require_once 'header.php';

// --- SITZUNGSPRÜFUNG ---
// Wenn der Benutzer nicht eingeloggt ist, leite ihn zur Login-Seite weiter.
if (!isset($_SESSION['benutzer'])) {
    header('Location: login.php');
    exit();
}

// Holen wir den Benutzernamen aus der Session.
$benutzername = $_SESSION['benutzer'];
?>

<h1>Willkommen auf Ihrer Profilseite</h1>
<p>Hallo, <strong><?php echo htmlspecialchars($benutzername); ?></strong>!</p>
<p>Diese Seite kann nur von eingeloggten Benutzern gesehen werden.</p>

<hr>

<p><a href="benutzerliste.php">Registrierte Benutzer anzeigen</a></p>
<p><a href="logout.php">Logout</a></p>


<?php
// Wir binden footer.php ein.
require_once 'footer.php';
?>