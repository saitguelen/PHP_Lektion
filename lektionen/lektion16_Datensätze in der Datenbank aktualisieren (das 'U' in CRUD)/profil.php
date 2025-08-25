<?php
// session_start() ist bereits in header.php.
include 'header.php';

// Ist der Benutzer eingeloggt? Wir prüfen, ob der Schlüssel 'benutzer' in der Session existiert.
if (isset($_SESSION['benutzer'])) {
    // Ja, er ist eingeloggt.
    $benutzername = $_SESSION['benutzer'];
} else {
    // Nein, er ist nicht eingeloggt. Leiten wir ihn zur Login-Seite zurück.
    header('Location: login.php'); // Hier sollte die Login-Seite sein, nicht profil.php.
    
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profilseite</title>
</head>
<body>
    <h1>Willkommen auf Ihrer Profilseite</h1>
    <p>Hallo, <strong><?php echo htmlspecialchars($benutzername); ?></strong>!</p>
    <p>Diese Seite kann nur von eingeloggten Benutzern gesehen werden.</p>
   
    <hr>
    <p>Hier können Sie Ihre Profilinformationen sehen und verwalten.</p>
    
    <a href="logout.php">Logout</a>
    <p><a href="benutzerliste.php">Registrierte Benutzer anzeigen</a></p>
<?php
// Wir binden footer.php ganz am Ende ein.
include 'footer.php';
?>