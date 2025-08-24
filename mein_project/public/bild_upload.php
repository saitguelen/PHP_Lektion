<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Database;
use App\User;

require_once 'header.php';

// Nur angemeldete Benutzer können Dateien hochladen
if (!isset($_SESSION['benutzername'])) {
    header('Location: login.php');
    exit();
}

$benutzername = $_SESSION['benutzername'];
$fehler = [];

// Prüfen, ob eine Datei gesendet wurde und kein Upload-Fehler vorliegt
if (isset($_FILES['profil_bild']) && $_FILES['profil_bild']['error'] === UPLOAD_ERR_OK) {
    
    $datei_temp_pfad = $_FILES['profil_bild']['tmp_name'];
    $datei_original_name = $_FILES['profil_bild']['name'];
    $datei_groesse = $_FILES['profil_bild']['size'];

    // Sicherheit: Dateierweiterung prüfen (nur Bilder erlauben)
    $gueltige_erweiterungen = ['jpg', 'jpeg', 'png', 'gif'];
    $datei_erweiterung = strtolower(pathinfo($datei_original_name, PATHINFO_EXTENSION));
    if (!in_array($datei_erweiterung, $gueltige_erweiterungen)) {
        $fehler[] = "Ungültiger Dateityp. Nur JPG, JPEG, PNG und GIF-Dateien sind erlaubt.";
    }

    // Sicherheit: Dateigröße prüfen (z.B. 2MB Limit)
    if ($datei_groesse > 2 * 1024 * 1024) {
        $fehler[] = "Die Datei ist zu groß. Bitte laden Sie eine Datei hoch, die kleiner als 2MB ist.";
    }

    if (empty($fehler)) {
        // Sicherheit: Einen eindeutigen Dateinamen generieren
        $neuer_dateiname = uniqid('', true) . '.' . $datei_erweiterung;
        $ziel_datei_pfad = 'uploads/' . $neuer_dateiname;

        // Die Datei vom temporären zum dauerhaften Speicherort verschieben
        if (move_uploaded_file($datei_temp_pfad, $ziel_datei_pfad)) {
            // Dateipfad in der Datenbank speichern
            $verbindung = Database::getInstance()->getConnection();
            
            if (User::updateProfilePicture($benutzername, $ziel_datei_pfad, $verbindung)) {
                echo "<div class='success'>Profilbild erfolgreich aktualisiert!</div>";
            } else {
                echo "<div class='error'>Bei der Aktualisierung der Datenbank ist ein Fehler aufgetreten.</div>";
            }
        } else {
            echo "<div class='error'>Beim Verschieben der Datei auf dem Server ist ein Fehler aufgetreten.</div>";
        }
    }
} else {
    $fehler[] = "Bitte wählen Sie eine Datei aus oder laden Sie eine gültige Datei hoch.";
}

// Fehler auflisten, falls vorhanden
if (!empty($fehler)) {
    echo "<div class='error'><ul>";
    foreach($fehler as $err) {
        echo "<li>" . $err . "</li>";
    }
    echo "</ul></div>";
}

echo '<p><a href="profil.php">Zurück zur Profilseite</a></p>';

require_once 'footer.php';
?>