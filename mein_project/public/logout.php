<?php
// Um eine Sitzung beenden zu können, müssen wir sie zuerst starten.
session_start();

// Alle Session-Daten löschen.
session_unset();

// Die Sitzung vollständig zerstören.
session_destroy();

// Den Benutzer zurück zur Anmeldeseite leiten.
header('Location: login.php');
exit();
?>