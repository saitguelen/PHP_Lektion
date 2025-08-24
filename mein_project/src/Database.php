<?php
namespace App; // Wir platzieren unsere Klassen im "App"-Namensraum.

//Wir geben an, dass wir die eingebaute mysqli-Klasse von PHP verwenden.
use mysqli;

class Database{
    private static $instance = null;
    private $connection;

    private $host='localhost';
    private $user='root';
    private $pass='';
    private $db_name='praktikum_projekt';

    private function __construct(){
        $this->connection = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
        if($this->connection->connect_error){
            die("Datenbankverbindung fehlgeschlagen: " . $this->connection->connect_error);
        }

    }
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance=new Database();
        }
        return self::$instance;
    }
    public function getConnection(){
        return $this->connection;
    }
}


?>