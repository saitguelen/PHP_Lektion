<?php
// Beginnen wir, indem wir header.php einbinden
require_once 'header.php';

echo "<h1 style = 'background-color: lightblue; border: 1px solid blue;'> OOP_Grundlagen: Klassen und Objekte</h1>";

// ---- 1. Die Klasse definieren (Der Bauplan)----
//Wir definieren, welche struktur ein Benutzer hat und was er tun kann.

class Benutzer
{
    // Eigenschaften (Properties) - Variablen, die zur Klasse gehören
    // public: bedeutet, dass auf diese Eigenschaft von außen zugegriffen werden kann.

    public $benutzername;
    public $email;

    //Methode(Method) - eine Funktion, die zur Klasse gehört
    //Diese Methode gibt einen Begrüßungssatz unter Verwendung der Eigenschaften des Benutzers zurück.
    public function vorstellung()
    {
        return "Hallo, Ich bin " . $this->benutzername . ". Meine E-mail ist: " . $this->email;
    }
}


// ---- 2. Objekte aus der Klasse erstellen (Instanzierung )---
$benutzer1 = new Benutzer();
$benutzer2 = new Benutzer();
$benutzer3= new Benutzer();

// ----3. Eigenschaften der Objekte setzen ---
// Die Eigenschaften jedes Objekts sind unabhängig voneinander.

$benutzer1->benutzername = "Sait";
$benutzer1->email = "sait@email.com";

$benutzer2->benutzername = "Nesibe";
$benutzer2->email = "nesibe@gmail.com";

$benutzer3->benutzername = "Jakob";
$benutzer3->email = "jakob@web.de";

// --- 4. Methoden der Objekte aufrufen ---
// Jedes Objekt führt die vorstellung()-Methode mit seinen eigenen Eigenschaften aus.

echo "<p style='border: 2px solid blue; background-color: magenta;'>" . $benutzer1->vorstellung() . "</p>";
echo "<p style='border: 2px solid blue; background-color: magenta;'>" . $benutzer2->vorstellung() . "</p>";
echo "<p style='border: 2px solid blue; background-color: magenta;'>" . $benutzer3->vorstellung() . "</p>";
echo "<hr>";
echo "<hr>";
echo "<br>";
require_once 'footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Grundlagen</title>
</head>

<body>
    <h2>OOP Grundlagen: Klassen und Objekte</h2>
    <p>In diesem Beispiel haben wir eine Klasse <strong>Benutzer</strong> erstellt,<br> die zwei Eigenschaften hat: <strong>benutzername</strong> und <strong>email</strong>. Wir haben zwei Objekte dieser Klasse erstellt und deren Eigenschaften gesetzt. Anschließend haben wir die Methode <strong>vorstellung()</strong> aufgerufen, um eine Begrüßung für jeden Benutzer auszugeben.</p>
    <p>Dies ist ein einfaches Beispiel für die objektorientierte Programmierung (OOP) in PHP, <br>das zeigt, wie Klassen und Objekte verwendet werden können, um strukturierte und wiederverwendbare Code-Elemente zu erstellen.</p>
    <p>
    <pre>
Lektion 17: Einführung in die Objektorientierte Programmierung (OOP) - Klassen und Objekte
In dieser Lektion lernen wir, was OOP ist, warum es wichtig ist, und die beiden grundlegendsten Konzepte: Klasse (Class) und Objekt (Object).

1. Grundlagen
<b style = "height: 375px; background-color: chartreuse;"> a) Warum OOP?</b>
Denk an unser aktuelles Projekt: login.php, register.php, db_verbindung.php... 
Jede Datei enthält spezifische Funktionen und Variablen. 
Wenn das Projekt wächst, wird es schwierig, den Überblick zu behalten, 
welche Variable wo verwendet wird und welche Funktion was tut.

OOP hilft uns, dieses Chaos zu vermeiden, indem wir den Code in in sich geschlossene Pakete aufteilen, 
die sich wie Objekte der realen Welt verhalten. So als würden wir die Informationen und 
Aktionen eines "Benutzers" in einem einzigen Paket zusammenfassen.

<b style="background-color: aqua;">b) Was ist eine Klasse und ein Objekt ?</b>
Um diese beiden Konzepte zu verstehen, verwenden wir eine einfache Analogie: eine Autofabrik.

Klasse (Class): Ist der Bauplan für ein Auto. In diesem Plan wird definiert, 
welche Eigenschaften ein Auto hat (Farbe, Modell, PS) und 
welche Aktionen es ausführen kann (starten, stoppen, beschleunigen). 
Die Klasse ist eine abstrakte Vorlage; sie ist noch kein echtes Auto.

Objekt (Object): Ist ein echtes Auto, das nach diesem Bauplan hergestellt wurde. 
Jedes einzelne Auto, das vom Fließband der Fabrik kommt, ist ein eigenständiges Objekt, obwohl es denselben 
Bauplan (dieselbe Klasse) hat. Ein Auto kann rot sein, ein anderes blau. Der Motor des einen kann laufen, 
während der andere steht.

In PHP ist es genauso:

Mit class Benutzer { ... } zeichnen wir den Plan für einen Benutzer.

Mit $sait = new Benutzer(); erstellen wir aus diesem Plan ein echtes, lebendiges Objekt namens "Sait".

Mit $jakob = new Benutzer(); erstellen wir aus demselben Plan ein weiteres Objekt namens "Jakob".

<b style="color:blue; border: 1px solid blue; background-color: lightgray;">c) Eigenschaften (Properties) und Methoden (Methods):</b>

Eigenschaften (Properties): Das sind die Variablen, die zu einer Klasse gehören. Wie farbe und modell im Auto-Beispiel.

Methoden (Methods): Das sind die Aktionen, die eine Klasse ausführen kann, also die Funktionen innerhalb einer Klasse. 
Wie starten() und stoppen() im Auto-Beispiel.
<hr><hr>


    
</pre>
    </p>

