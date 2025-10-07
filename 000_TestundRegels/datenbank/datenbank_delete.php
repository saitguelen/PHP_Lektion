<?php
// Verbindung zur Datenbank herstellen
$host = "localhost";
$datenbank= "eis_db";
$benutzer = "root";
$passwort = "";

$conn = new PDO ("mysql:host=$host;dbname=$datenbank;charset=utf8",$benutzer,$passwort);

try{
    $sql = "DELETE FROM kunden WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();  
    echo "<a href='datenbank_insert.php'>Zurück zur Liste</a><br>";
    echo var_dump($stmt);
    
    if($stmt->rowCount() == 0){
        echo "Kein Datensatz gefunden mit der angegebenen ID.";
        exit;
    }    
    echo "Datensatz mit der ID $id wurde erfolgreich gelöscht.";    


}catch(PDOException $e){
    echo "Fehler: " . $e->getMessage();
}



?>