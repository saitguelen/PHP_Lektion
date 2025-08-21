<?php
require_once 'header.php';
require_once 'Database.php';

// Nur eingeloggte Benutzer können Dateien hochladen
if (!isset($_SESSION['benutzer'])) {
    header('Location: login.php');
    exit();
}

$fehler = [];

// Prüfen, ob eine Datei gesendet wurde und kein Fehler vorliegt
if (isset($_FILES['profilbild']) && $_FILES['profilbild']['error'] === UPLOAD_ERR_OK) {
    
    $datei_temp_pfad = $_FILES['profilbild']['tmp_name'];
    $datei_original_name = $_FILES['profilbild']['name'];

    // Sicherheit: Einen eindeutigen Dateinamen generieren
    $datei_erweiterung = pathinfo($datei_original_name, PATHINFO_EXTENSION);
    $neuer_dateiname = uniqid('', true) . '.' . strtolower($datei_erweiterung);

    $ziel_ordner = 'uploads/';
    $ziel_datei_pfad = $ziel_ordner . $neuer_dateiname;

    // Die Datei vom temporären zum dauerhaften Speicherort verschieben
    if (move_uploaded_file($datei_temp_pfad, $ziel_datei_pfad)) {
        // Dateipfad in der Datenbank speichern
        $verbindung = Database::getInstance()->getConnection();
        $benutzername = $_SESSION['benutzer'];
        
        $sql = "UPDATE benutzer SET profilbild = ? WHERE benutzername = ?";
        $stmt = mysqli_prepare($verbindung, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $ziel_datei_pfad, $benutzername);
        mysqli_stmt_execute($stmt);
        mysqli_commit($verbindung);

        echo "<p style='color:green;'>Profilbild erfolgreich aktualisiert!</p>";
        echo "<a href='profil.php'>Zurück zum Profil</a>";

    } else {
        $fehler[] = "Beim Hochladen der Datei ist ein Fehler aufgetreten.";
    }
} else {
    $fehler[] = "Bitte wählen Sie eine Datei aus oder laden Sie eine gültige Datei hoch.";
}

// Fehler anzeigen, falls vorhanden
if (!empty($fehler)) {
    foreach($fehler as $err) {
        echo "<p style='color:red;'>" . $err . "</p>";
    }
}

require_once 'footer.php';
?>