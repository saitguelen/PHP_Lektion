<?php
// Wir binden header.php ein (session_start() ist darin enthalten)
require_once 'header.php';
require_once 'Database.php';

// --- SITZUNGSPRÜFUNG ---
// Wenn der Benutzer nicht eingeloggt ist, leite ihn zur Login-Seite weiter.
if (!isset($_SESSION['benutzer'])) {
    header('Location: login.php');
    exit();
}

// Holen wir den Benutzernamen aus der Session.
$benutzername = $_SESSION['benutzer'];

// Den Bildpfad des Benutzers aus der Datenbank holen
$verbindung = Database::getInstance()->getConnection();
$sql = "SELECT profilbild FROM benutzer WHERE benutzername = ?";
$stmt = mysqli_prepare($verbindung, $sql);
mysqli_stmt_bind_param($stmt, "s", $benutzername);
mysqli_stmt_execute($stmt);
$ergebnis = mysqli_stmt_get_result($stmt);
$user_data = mysqli_fetch_assoc($ergebnis);
$profilbild_pfad = $user_data['profilbild'];
?>


<h1>Willkommen auf Ihrer Profilseite</h1>
<p>Hallo, <strong><?php echo htmlspecialchars($benutzername); ?></strong>!</p>
<p>Diese Seite kann nur von eingeloggten Benutzern gesehen werden.</p>

<hr>
<hr>
<h3>Profilbild ändern</h3>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <p>
        <input type="file" name="profilbild">
    </p>
    <p>
        <button type="submit">Bild hochladen</button>
    </p>
</form>

<p><a href="benutzerliste.php">Registrierte Benutzer anzeigen</a></p>
<p><a href="logout.php">Logout</a></p>


<?php
// Wenn der Benutzer ein Profilbild hat, zeige es an.
if (!empty($profilbild_pfad)) {
    echo "<img src='" . htmlspecialchars($profilbild_pfad) . "' alt='Profilbild' width='150'>";
} else {
    echo "<p>Sie haben noch kein Profilbild.</p>";
}

// Wir binden footer.php ein.
require_once 'footer.php';
?>