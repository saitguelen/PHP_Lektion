
<?php
// Notwendige Dateien einbinden
require_once 'header.php';
require_once 'db_verbindung.php';

// --- SITZUNGSPRÜFUNG (SEHR WICHTIG!) ---
// Nur eingeloggte Benutzer dürfen Löschoperationen durchführen.
if (!isset($_SESSION['benutzer'])) {
    header('Location: login.php');
    exit();
}

// --- ID-PRÜFUNG ---
// Wurde eine ID über die URL übergeben und ist es eine Zahl?
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $zu_loeschende_id = $_GET['id'];

    // --- LÖSCHOPERATION (PREPARED STATEMENT) ---
    $sql = "DELETE FROM benutzer WHERE id = ?";
    $stmt = mysqli_prepare($verbindung, $sql);
    
    // "i" -> gibt an, dass die gesendete Variable ein Integer (Ganzzahl) ist.
    mysqli_stmt_bind_param($stmt, "i", $zu_loeschende_id);
    
    if (mysqli_stmt_execute($stmt)) {
        // Operation erfolgreich, leite den Benutzer zurück zur Liste.
        header('Location: benutzerliste.php');
        exit();
    } else {
        // Ein Fehler ist aufgetreten.
        echo "Fehler: Datensatz konnte nicht gelöscht werden.";
    }
} else {
    // Ungültige oder fehlende ID, sende den Benutzer zurück zur Liste.
    header('Location: benutzerliste.php');
    exit();
}

// Verbindung schließen
mysqli_close($verbindung);

// footer.php muss nicht eingebunden werden, da die Seite sowieso weiterleitet.
?>
