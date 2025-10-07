<?php
$host= "localhost";
$db = "eis_db";
$user ="root";
$pass = "";

try{
    $corn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
    $corn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Verbindung erfolgreich";

}catch(PDOException $e){
    echo "Etwas ist schief gelaufen:  " . $e->getMessage();

}

$stmt =$corn->prepare("SELECT * FROM kunden");
$stmt->execute();
$sonuc = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($sonuc);
// echo "</pre>";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    <h1>KundenDaten</h1>
    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Anrede</th>
            <th>Nachname</th>
            <th>Alter</th>
            <th>Gewünschte Eis</th>
        </tr>
        <?php
        foreach($sonuc as $row){
            echo "<tr>";
            echo "<td>" .$row['id'] . "</td>";
            echo "<td>" .$row['anrede'] . "</td>";
            echo "<td>" .$row['nachname'] . "</td>";
            echo "<td>" .$row['age'] . "</td>";
            echo "<td>" .$row['eis'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>