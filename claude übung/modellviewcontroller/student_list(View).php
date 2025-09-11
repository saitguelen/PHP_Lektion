<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Listesi</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>👨‍🎓 Öğrenci Listesi</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Yaş</th>
            <th>Sınıf</th>
        </tr>
        
        <?php foreach($ogrenciler as $ogrenci): ?>
        <tr>
            <td><?= $ogrenci['id'] ?></td>
            <td><a href ="controller.php?id=<?=$ogrenci['id'] ?>"><?= $ogrenci['name'] ?></a></td>
            <td><?= $ogrenci['age'] ?></td>
            <td><?= $ogrenci['class'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <p><strong>Toplam öğrenci sayısı:</strong> <?= count($ogrenciler) ?></p>
</body>
</html>