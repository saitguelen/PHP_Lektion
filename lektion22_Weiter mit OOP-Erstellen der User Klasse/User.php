<?php
class User {
    // Eigenschaften
    public $id;
    public $benutzername;
    private $gehashtes_passwort; // Machen wir das Passwort privat

    // Diese Klasse benötigt eine Datenbankverbindung, um zu funktionieren.
    private $verbindung;

    public function __construct($verbindung) {
        $this->verbindung = $verbindung;
    }

    // Eine STATISCHE Methode, um einen Benutzer anhand seines Namens in der DB zu finden
    public static function findByUsername($benutzername, $db_verbindung) {
        $sql = "SELECT * FROM benutzer WHERE benutzername = ?";
        $stmt = mysqli_prepare($db_verbindung, $sql);
        mysqli_stmt_bind_param($stmt, "s", $benutzername);
        mysqli_stmt_execute($stmt);
        $ergebnis = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($ergebnis) === 1) {
            return mysqli_fetch_assoc($ergebnis); // Gib den Benutzer als Array zurück
        }
        return null; // Gib null zurück, wenn der Benutzer nicht gefunden wurde
    }

    // Eine STATISCHE Methode, um einen neuen Benutzer zu erstellen
    public static function create($benutzername, $passwort, $db_verbindung) {
        $gehashtes_passwort = password_hash($passwort, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO benutzer (benutzername, passwort) VALUES (?, ?)";
        $stmt = mysqli_prepare($db_verbindung, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $benutzername, $gehashtes_passwort);
        
        if (mysqli_stmt_execute($stmt)) {
            mysqli_commit($db_verbindung);
            return true; // Erfolg
        }
        return false; // Misserfolg
    }
}
?>