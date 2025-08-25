<?php
// Wir müssen die Session erneut starten, um sie beenden zu können.
session_start();

// Alle Session-Daten löschen.
session_unset();

// Die Session vollständig zerstören.
session_destroy();

// Den Benutzer mit einer "ausgeloggt"-Nachricht zur Login-Seite weiterleiten.
header('Location: login.php?status=logout');
// Es ist wichtig, die Skriptausführung nach einer Weiterleitung zu stoppen.    
exit();
?>