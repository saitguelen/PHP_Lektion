<?php
class Database {
    // Für das Singleton-Muster: Wir speichern das einzige Objekt der Klasse in dieser statischen Eigenschaft.
    private static $instance = null;
    
    // Die Eigenschaft, die das Datenbankverbindungsobjekt halten wird.
    private $verbindung;

    // Verbindungsinformationen (private, von außen nicht zugänglich)
    private $server = "localhost";
    private $benutzer = "root";
    private $passwort = "";
    private $datenbank = "praktikum_projekt";

    // Indem wir den Konstruktor private machen, verhindern wir, dass von außen mit "new Database()" ein Objekt erzeugt wird.
    private function __construct() {
        $this->verbindung = mysqli_connect($this->server, $this->benutzer, $this->passwort, $this->datenbank);
        if (!$this->verbindung) {
            die("Datenbankverbindung fehlgeschlagen: " . mysqli_connect_error());
        }
    }

    // Für das Singleton-Muster: Wir verwenden diese statische Methode, um auf das einzige Objekt der Klasse zuzugreifen.
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Eine Methode, um das Verbindungsobjekt nach außen zu geben.
    public function getConnection() {
        return $this->verbindung;
    }
}
?>