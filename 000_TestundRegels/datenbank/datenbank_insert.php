<?php
$host = "localhost";
$db = "eis_db";
$user = "root";
$pass = "";
try {
    $corn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $corn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbindung erfolgreich"."<br>";
} catch (PDOException $e) {
    echo "Etwas ist schief gelaufen:  " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $eis = $_POST['eis'];
    $anrede = $_POST['anrede'];
    $nachname = $_POST['nachname'];
    $alter = $_POST['age'];
    

    $sql = "INSERT INTO kunden (eis,anrede, nachname, age) VALUES (:eis, :anrede, :nachname, :age)";
    $stmt = $corn->prepare($sql);
    $stmt->bindParam(':eis', $eis);
    $stmt->bindParam(':anrede', $anrede);
    $stmt->bindParam(':nachname', $nachname);
    $stmt->bindParam(':age', $alter);
    $result = $stmt->execute();
    if ($result) {
        echo "Daten erfolgreich eingefügt";
    } else {
        echo "Fehler beim Einfügen der Daten";
        if ($stmt) {
            print_r($stmt->errorInfo());
        }
        die();
    }
}

$sql = "SELECT * FROM kunden";
$stmt = $corn->prepare($sql);
$stmt->execute();
$sonuc = $stmt->fetchAll(PDO::FETCH_ASSOC);     
// echo "<pre>";
// print_r($sonuc);     
?>
<!DOCTYPE html>
<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kundendaten Einfügen</title> 

    <style>
        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }   
    </style>
</head>


<body>
    <h1>Kundendaten Einfügen</h1>
    <form method="post" action="">
        <label for ="eis">Gewünschte Eis:</label>
        <input type="text" id="eis" name="eis" required>
        <label for="anrede">Anrede:</label>
        <input type="text" id="anrede" name="anrede" required>

        <label for="nachname">Nachname:</label>
        <input type="text" id="nachname" name="nachname" required>

        <label for="age">Alter:</label>
        <input type="number" id="age" name="age" required>

        <input type="submit" value="Daten Einfügen">
    </form>

    <h2>Vorhandene Kundendaten</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Anrede</th>
            <th>Nachname</th>
            <th>Alter</th>
            <th>Gewünschte Eis</th>
            <th>Aktionen</th>
        </tr>
        
        <?php
        foreach ($sonuc as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['anrede'] . "</td>";
            echo "<td>" . $row['nachname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['eis'] . "</td>";
            echo "<td><a href='datenbank_delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Sind Sie sicher, dass Sie diesen Datensatz löschen möchten?');\">Löschen</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
