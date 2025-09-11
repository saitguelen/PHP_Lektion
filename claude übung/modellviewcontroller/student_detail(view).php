<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Detayı</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .student-card { 
            border: 4px solid #bf1f1fff; 
            padding: 20px; 
            border-radius: 10px; 
            max-width: 400px; 
            background-color: #8ac8e3ff; 
        }
        .back-link { 
            display: inline-block; 
            margin-top: 15px; 
            color: #007bff; 
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <h1>👨‍🎓 Öğrenci Detayı</h1>
    <?php if($ogrenci): ?>
        <div class="student-card">
            <h2><?= $ogrenci['name'] ?></h2>
            <p><strong>ID:</strong> <?= $ogrenci['id'] ?></p>
            <p><strong>Yaş:</strong> <?= $ogrenci['age'] ?></p>
            <p><strong>Sınıf:</strong> <?= $ogrenci['class'] ?></p>

        </div>
        <?php else: ?>
        <p style="color: red;">❌ Öğrenci bulunamadı!</p>
    <?php endif; ?>
    
    <a href="controller.php" class="back-link">⬅️ Listeye Geri Dön</a>
</body>
</html>