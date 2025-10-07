<?php
//wir erstellen eine arra liste das Mitarbeiter-Array

$mitarbeiter = array(
    array(
        "vorname" => "Ali",
        "nachname" => "Yilmaz",
        "position" => "Frontend Entwickler"
    ),
    array(
        "vorname" => "Veli",
        "nachname" => "Öztürk",
        "position" => "Backend Entwickler"
    ),
    array(
        "vorname" => "Tahir",
        "nachname" => "Öztürk",
        "position" => "UI Designer"
    ),
    array(
        "vorname" => "Serpil",
        "nachname" => "Yavas",
        "position" => "XI Designer"
    ),
    array(
        "vorname" => "Elizabeth",
        "nachname" => "Müller",
        "position" => "Human Source"
    )
);

// echo "<pre>";
// print_r($mitarbeiter);
// echo "</pre>";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Mitarbeiterliste</title>
</head>

<body>
    <h1>Unsere Mitarbeiter</h1>
    <table border="1" text-align="center">
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Position</th>
        </tr>
        <?php
        foreach ($mitarbeiter as $person) {
            echo "<tr>";
            echo "<td>" . $person['vorname'] . "</td>";
            echo "<td>" . $person['nachname'] . "</td>";
            echo "<td>" . $person['position'] . "</td>";
            echo "</tr>";
        }

        ?>
    </table>
    <h2>Mit for Schleife</h2>
    <table>
        <table border="1" text-align="center">
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Position</th>
        </tr>
        <?php

        for ($i=0; $i<count($mitarbeiter);$i++){
            echo "<tr>";
            echo "<td>" .$mitarbeiter[$i]['vorname']. "</td>";
            echo "<td>" .$mitarbeiter[$i]['nachname']. "</td>";
            echo "<td>" .$mitarbeiter[$i]['position']. "</td>";
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>