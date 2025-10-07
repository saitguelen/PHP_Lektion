<?php
require_once 'header.php';

echo "<h1>Fortgeschrittene OOP-Konzepte</h1>";

// --- 1. ELTERNKLASSE (PARENT CLASS) ---
class Mitarbeiter {
    // Wir schützen die Eigenschaften durch 'private' vor direktem Zugriff von außen.
    private $name;
    private $abteilung;

    // Konstruktor: Wird bei der Objekterstellung aufgerufen.
    public function __construct($name, $abteilung) {
        echo "<p>Ein neues Mitarbeiter-Objekt wurde erstellt...</p>";
        $this->name = $name;
        $this->abteilung = $abteilung;
    }

    // Eine öffentliche Methode, um auf die privaten Eigenschaften zuzugreifen
    public function getInfos() {
        return "Name: " . $this->name . ", Abteilung: " . $this->abteilung;
    }
}


// --- 2. KINDKLASSE (CHILD CLASS) ---
// Die Klasse Manager erbt alle Eigenschaften und Methoden von Mitarbeiter.
class Manager extends Mitarbeiter {
    // Eine Eigenschaft, die nur für Manager spezifisch ist
    private $anzahl_unterstellte;
    // Der eigene Konstruktor des Managers
    public function __construct($name, $abteilung, $anzahl) {
        // Zuerst rufen wir den Konstruktor der Elternklasse auf, um die Grundeigenschaften zu setzen.
        parent::__construct($name, $abteilung);
        
        $this->anzahl_unterstellte = $anzahl;
        echo "<p>...und dieser Mitarbeiter ist ein Manager!</p>";
    }

    // Wir überschreiben die Methode der Elternklasse (override) und fügen etwas hinzu.
    public function getInfos() {
        // Zuerst rufen wir die Methode der Elternklasse auf, um die Basis-Infos zu erhalten
        $basis_info = parent::getInfos();
        // Dann fügen wir unsere eigene Information hinzu
        return $basis_info . ", Anzahl Unterstellte: " . $this->anzahl_unterstellte;
    }
}


// --- 3. OBJEKTE VERWENDEN ---
echo "<h2>Mitarbeiter erstellen:</h2>";
$mitarbeiter1 = new Mitarbeiter('Mustafa', 'IT');
echo $mitarbeiter1->getInfos();
echo "<br>";
$mitarbeiter2 = new Mitarbeiter("Hans","Marketing");
echo $mitarbeiter2->getInfos();
echo "<br>";
$mitarbeiter3 = new Mitarbeiter("Susanna", "HR");
echo $mitarbeiter3->getInfos();
echo "<br>";

echo "<hr>";

echo "<h2>Manager erstellen:</h2>";
$manager1 = new Manager('Sait', 'Management', 15);
echo $manager1->getInfos();
echo "<br>";
$manager2 = new Manager('Joachim', 'Vertrieb', 10);
echo $manager2->getInfos();

echo "<hr>";

// Versuchen wir, auf eine private Eigenschaft von außen zuzugreifen (DAS WIRD EINEN FEHLER VERURSACHEN!)
// echo $mitarbeiter1->name; // Wenn du den Kommentar vor dieser Zeile entfernst, erhältst du einen "Fatal error".

require_once 'footer.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fortgeschrittene OOP-Konzepte</title>
</head>
<body>
    <h1>Fortgeschrittene OOP-Konzepte</h1>
    <p>In diesem Abschnitt haben wir uns mit fortgeschrittenen Konzepten der objektorientierten Programmierung (OOP) in PHP beschäftigt.</p>
    <h2>Wichtige Konzepte</h2>
    <p>
        <div>
            <pre>
1. Grundlagen 
a) Der Konstruktor (__construct):
In unserer letzten Lektion haben wir zuerst ein leeres Objekt erstellt ($benutzer = new Benutzer();) 
und dann seine Eigenschaften einzeln gefüllt ($benutzer->benutzername = 'sait';). Das ist etwas umständlich.
Die __construct-Methode ist eine spezielle Methode, die automatisch aufgerufen wird, sobald ein Objekt mit dem new-Schlüsselwort erstellt wird. 
Dadurch können wir dem Objekt seine Anfangswerte direkt bei der Erstellung mitgeben.
Beispiel: $benutzer = new Benutzer('sait', 'sait@email.com');

b) Zugriffsmodifikatoren (public, private):
Dies sind Schlüsselwörter, die festlegen, von wo aus auf die Eigenschaften und Methoden einer Klasse zugegriffen werden kann. Man nennt dies "Kapselung" (Encapsulation).

public (öffentlich): Wenn eine Eigenschaft oder Methode public ist, 
kann sowohl von innerhalb als auch von außerhalb der Klasse darauf zugegriffen werden. Bisher haben wir immer dies verwendet.

private (privat): Wenn eine Eigenschaft oder Methode private ist, kann darauf nur von innerhalb derselben Klasse zugegriffen werden. 
Ein direkter Zugriff von außen führt zu einem Fehler. Dies ist sehr wichtig, um die interne Struktur eines Objekts zu schützen und unerwünschte Änderungen von außen zu verhindern. 
Das macht unseren Code sicherer und stabiler.

c) Vererbung (Inheritance / extends):
Vererbung bedeutet, dass eine Klasse alle public (und protected) Eigenschaften und Methoden einer anderen Klasse erbt. Dies ist der mächtigste Weg, um Code-Wiederholung zu vermeiden.

Analogie: Stell dir vor, wir haben eine Klasse "Fahrzeug". Ein "Auto" ist ein Fahrzeug, ein "Motorrad" auch. 
Die Klassen Auto und Motorrad können gemeinsame Eigenschaften wie Räderanzahl und Motor von der Klasse "Fahrzeug" erben (extends) 
und dann ihre eigenen spezifischen Eigenschaften hinzufügen (wie Kofferraumvolumen oder Helmpflicht).

Elternklasse (Parent Class): Die Klasse, die ihre Eigenschaften vererbt ("Fahrzeug").

Kindklasse (Child Class): Die Klasse, die das Erbe annimmt ("Auto").
            </pre>
        </div>
    </p>

    <p><pre>
        Kurze Zusammenfassung 
Die __construct-Methode ermöglicht es uns, einem Objekt bei seiner Erstellung mit new Anfangswerte zuzuweisen, was den Code verkürzt.

Mit private schützen wir Eigenschaften; nur die eigenen public-Methoden der Klasse können darauf zugreifen. Das macht unseren Code sicherer und vorhersagbarer.

Mit extends erweitern wir eine Klasse, vermeiden Code-Wiederholungen und bauen logische Hierarchien (Fahrzeug -> Auto). 
Mit parent:: können wir auf die Methoden der Elternklasse zugreifen
    </pre></p>
</body>
</html>