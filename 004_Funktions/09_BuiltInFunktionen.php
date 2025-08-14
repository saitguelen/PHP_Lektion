<!DOCTYPE html>
<html lang="en,de,tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionen von PHP</title>
</head>

<body>

    <h1>Funktionen von PHP – PHP’nin Yerleşik Fonksiyonları</h1>
    <hr><br>
    <p>
    <pre>
PHP bietet eine große Anzahl an vordefinierten Funktionen, die bestimmte Aufgaben schnell und effizient erledigen – z. B. für Strings, Arrays, Dateien, Mathe, Datum usw.

🧠 :
„Diese Funktionen sind wie Werkzeuge in einer Werkzeugkiste. Du musst sie nicht selbst bauen – du musst nur wissen, wie du sie benutzt.“

🔍 Örnek Yerleşik Fonksiyonlar
🧮 Matematiksel Fonksiyonlar
echo abs(-5);         // 5
echo round(3.14159);  // 3
echo ceil(2.3);       // 3
echo floor(2.9);      // 2


📅 Tarih Fonksiyonları

echo date("Y-m-d");   // Bugünün tarihi
echo time();          // Unix zaman damgası


🧵 Metin (String) Fonksiyonları
echo strlen("Hallo");         // 5
echo strtoupper("hallo");     // HALLO
echo strtolower("HALLO");     // hallo
echo str_replace("a", "x", "Banane"); // Bxnxne


📦 Dizi (Array) Fonksiyonları
$früchte = ["Apfel", "Banane", "Kirsche"];
echo count($früchte);         // 3
print_r(array_reverse($früchte));

🧠 Notlar / Hinweise:
Yerleşik fonksiyonları öğrenmek için <strong>php.net/manual</strong> mükemmel bir kaynaktır.
Fonksiyonlar genellikle bir veya daha fazla parametre alır ve bir değer döndürür.
Bazı fonksiyonlar işlemi doğrudan yapar (echo, print_r), bazıları sonucu döndürür (round, str_replace).
        </pre>
    </p>
    <hr>
    <a href="php.net/manual" name="PHP built_in Funktionen"> </a>
    <?php

    echo abs(-5);
    echo abs(-5);         // 5
    echo round(3.14159);  // 3
    echo ceil(2.3);       // 3
    echo floor(2.9);      // 2
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "bugünün tarihi: " . date("d-m-Y");
    echo "<br>";
    echo "<br>";
    echo "suanin saati: " . time();
    echo "<br>";
    echo "<br>";
    echo strtoupper("hallo das ist eines test!");
    echo "<br>";
    echo "<br>";
    echo strtolower("HALLO");
    echo "<br>";
    echo "<br>";
    echo strlen("jvnidfv fnlfgllfvlf");
    echo "<br>";
    echo "<br>";
    echo str_replace("a", "e", "Bananne");
    echo "<br>";
    echo "<br>";

    $früchte = ["Apfel", "Banane", "Kirsche"];
    echo count($früchte);// 3
    echo "<br>";
    echo "<br>";
    echo "<pre>";
    print_r($früchte);
    echo "</pre>";
    echo "<br>";
    echo "<br>";    
    echo "<pre>";
    print_r(array_reverse($früchte));
    echo "</pre>";



    ?>

</body>

</html>