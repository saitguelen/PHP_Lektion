<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $host = "localhost";
    $username = "root";
    $passwort = "";
    $db_instanz = "extraegitim";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db_instanz;charset=utf8", $username, $passwort);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "erfolgreiche Verbindung!!";
    } catch (PDOException $e) {
        die("Verbindung Fehler: " . $e->getMessage());
    } //(id, ad, soyad, yas, sinif, not_ort)

    $sql = "INSERT INTO ogrenciler (id, ad, soyad, yas, sinif, not_ort) VALUES (?,?,?,?,?,?) ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([1, "Ahmet", "Adigüzel", 16, "11-b", 85]);
    $stmt->execute([2, "Serkan", "Yaman", 19, "11-a", 75]);
    $stmt->execute([3, "Ayse", "Güzel", 17, "10-c", 90]);
    $stmt->execute([4, "Fatma", "Yar", 19, "9-b", 55]);
    $stmt->execute([5, "Volkan", "Demir", 16, "11-d", 45]);
    $stmt->execute([6, "Zeliha", "Güzelhoca", 20, "12-c", 40]);
    echo "Öğrenciler eklendi. (Schüler hinzugefügt.)<br><hr>";
    echo "Yasi 18'den büyük ögrenciler: <br>";
    $sql = "SELECT * FROM ogrenciler WHERE yas> ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([18]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        echo $user['ad'] . " " . $user['soyad'] . "<br>";
    }
    echo "<hr>";
    echo "Notu 70'den fazla olan ögrenciler: "."<br>";
    $sql = "SELECT * FROM ogrenciler WHERE not_ort> ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([70]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        echo $user['ad'] . " " . $user['soyad'] . "<br>";
    }
    echo "<hr>";

    $sql = "UPDATE ogrenciler SET not_ort=? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([65, 1]);
    echo "Note für ID 1 wurde auf 65 aktualisiert.<br><hr>";


    $sql = "SELECT COUNT(*) FROM ogrenciler";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $ogrenciSayisi = $stmt->fetchColumn(); // Tek bir sütun sonucunu almak için idealdir.
    echo "Sistemdeki toplam öğrenci sayısı: " . $ogrenciSayisi;
    echo "<br><hr>";


    $pdo = null;

    ?>
</body>

</html>