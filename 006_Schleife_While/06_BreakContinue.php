<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BreakContinue</title>
</head>
<body>
    <h1>Break and Continue in PHP</h1>
    <h2>Break</h2>
    <p>The <code>break</code> statement is used to terminate a loop or switch statement.</p>
    <p>Break kullanimi: döngüyü sonlandirmak icin kullaniriz.</p>
    <h2>Continue</h2>
    <p>The <code>continue</code> statement is used to skip the current iteration of a loop and continue with the next iteration.</p>
    <p>Continue kullanimi: döngünün mevcut iterasyonunu atlamak ve bir sonraki iterasyona devam etmek için kullanılır.</p>
    <pre><code>
    for ($i = 0; $i &lt; 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo $i;
    }
    </code></pre>
    <?php
    echo "<h3>Örnekler</h3>";
    echo "Simdi de continue icin ornek yapalim:<br>";
    echo "1'den 10'a kadar olan sayilardan tek olanlari yazdiralim:<br>";
    echo "<br>";
    echo "<br>";
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo $i;
    }

    echo "<br>";
    echo "<br>";
    echo "Simdi de break icin ornek yapalim:<br>";
    echo "1'den 10'a kadar olan sayilardan 5'e kadar olanlari yazdiralim:<br>";
    echo "<br>";
    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo $i;
    }

    ?>

</body>
</html>