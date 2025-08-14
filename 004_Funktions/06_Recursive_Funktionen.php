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
    function fakultaet($n)
    {
        if ($n <= 1) {
            return 1;
        }
        return $n * fakultaet($n - 1);
    }

    echo "5! = " . fakultaet(5);
    ?>


</body>

</html>