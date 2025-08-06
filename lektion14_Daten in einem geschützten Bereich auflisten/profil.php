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
    <p>Kurze Zusammenfassung<br>
 
Passwörter dürfen niemals im Klartext in der Datenbank gespeichert werden.<br>

Für die sichere Speicherung wird ein einseitiger Verschlüsselungsprozess namens Hashing verwendet.<br>

Alte Hashing-Funktionen wie md5() und sha1() sind nicht mehr sicher.<br>

Der moderne und sichere Weg in PHP ist die Verwendung von <code>password_hash()</code> <br>
zum Erstellen von Hashes und <code>password_verify()</code> zum Überprüfen.<br>

Die Funktion <code>password_hash()</code> kümmert sich automatisch und sicher um das "Salting", <br>
was das Knacken von Passwörtern extrem erschwert.</p><hr>
<p>Zusätzliche Informationen:   <br>
Kurze Zusammenfassung <br>
<strong>include</strong> und <strong>require</strong> werden verwendet, um den Inhalt einer PHP-Datei in eine andere einzufügen.<br>

Diese Methode hilft, Code-Duplizierung zu vermeiden und macht Projekte organisierter, modularer und leichter wartbar.<br>

<strong></strong>require</strong> wird für essenzielle Dateien verwendet (wie Datenbankverbindungen), da es das Skript stoppt, wenn die Datei fehlt.<br>

<strong></strong>include</strong> wird für nicht-essenzielle Inhalte verwendet, bei denen das Programm auch ohne sie weiterlaufen soll.<br>

Das Erstellen von wiederverwendbaren Teilen wie header.php und footer.php ist eine grundlegende Praxis <br>
der professionellen PHP-Entwicklung.<br>

Deine Aufgabe ist es nun, die Dateien header.php und footer.php zu erstellen und <br>
anschließend deine Dateien login.php und profil.php so anzupassen, dass sie diese neue Struktur verwenden. <br>
Stelle danach sicher, dass alles noch wie zuvor funktioniert.<br>

Nachdem du diese Struktur aufgebaut hast, werden wir in unserer nächsten Lektion ein neues Feature hinzufügen, <br>
das alles bisher Gelernte kombiniert: die Erstellung eines Registrierungsformulars für neue Benutzer.</p><br><hr>
    <a href="logout.php">Logout</a>
    <p><a href="benutzerliste.php">Registrierte Benutzer anzeigen</a></p>
<?php
// Wir binden footer.php ganz am Ende ein.
include 'footer.php';
?>