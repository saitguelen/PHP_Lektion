<!DOCTYPE html>
<html lang="en,de,tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive Funktionen</title>
</head>

<body>
    <h1>Rekursive Funktinen</h1>
    <p>
    <pre>
    Rekursive Funktionen sind Funktionen, die sich selbst aufrufen. Sie sind besonders nützlich bei mathematischen Problemen wie Fakultät oder Fibonacci.

    🧠 
    „Die Funktion sagt: ‚Ich kann das lösen, aber ich brauche mich selbst nochmal, um den Rest zu machen.‘ So ruft sie sich selbst auf, bis sie fertig ist.“

    “Fonksiyon bir işi yapar, ama işin tamamı için kendine tekrar ihtiyaç duyar. Bu yüzden kendini tekrar çağırır. 
    Tıpkı bir merdiveni çıkmak gibi: her basamakta aynı işlemi yaparsın, ta ki sona ulaşana kadar.”
        </pre>
    </p>
    <?php
    function summe($n)
    {
        if ($n <= 1) {
            return 1;
        }
        return $n + summe($n - 1);
    }

    $n=15;
    echo "<p>Die Summe der Zahlen von 1 bis " . $n . " = " . summe(15);
    ?>
    <hr>
    <br>
    <p>
    <pre>"Die Funktion summiert alle Zahlen von 1 bis 15, indem sie sich selbst erneut aufruft. 
    Jeder Aufruf addiert eine Zahl und kehrt zum vorherigen Aufruf zurück. 
    Schließlich werden alle Aufrufe addiert, um das Gesamtergebnis zu erhalten."</pre>
    </p>


</body>

</html>