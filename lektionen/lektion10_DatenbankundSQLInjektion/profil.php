<?php
// Wir rufen dies wieder ganz am Anfang auf, um die Session fortzusetzen.
session_start();

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
    <a href="logout.php">Logout</a>
</body>
</html>