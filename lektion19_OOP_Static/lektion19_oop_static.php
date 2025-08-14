<?php
require_once 'header.php';

echo "<h1>Statische Eigenschaften und Methoden</h1>";

// --- 1. Klasse mit statischen Mitgliedern definieren ---
class Mathematik {
    // Statische Eigenschaft: Diese Eigenschaft gehört zur gesamten Mathematik-Klasse, nicht zu einem einzelnen Objekt.
    // Wir verwenden sie, um alle durchgeführten Operationen zu zählen.
    public static $operationszaehler = 0;

    // Statische Methode: Wir müssen nicht "new Mathematik()" aufrufen, um diese Methode zu verwenden.
    public static function addiere($zahl1, $zahl2) {
        // Um von innerhalb der Klasse auf eine statische Eigenschaft zuzugreifen, verwenden wir "self::".
        self::$operationszaehler++;
        return $zahl1 + $zahl2;
    }

    public static function multipliziere($zahl1, $zahl2) {
        self::$operationszaehler++;
        return $zahl1 * $zahl2;
    }
    public static function subtrahiere($zahl1, $zahl2) {
        self::$operationszaehler++;
        return $zahl1 - $zahl2;
    }

    // Eine statische Methode, die eine statische Eigenschaft zurückgibt.
    public static function getOperationszaehler() {
        return self::$operationszaehler;
    }
}


// --- 2. Statische Methoden und Eigenschaften verwenden ---

// Achtung: Wir haben KEIN Objekt mit "new Mathematik()" ERSTELLT!

// Wir rufen die Methoden direkt über den Klassennamen auf.
$summe = Mathematik::addiere(10, 5);
echo "<p>10 + 5 = " . $summe . "</p>";

$produkt = Mathematik::multipliziere(10, 5);
echo "<p>10 * 5 = " . $produkt . "</p>";

$diff = Mathematik::subtrahiere(10, 5);
echo "<p>10 - 5 = " . $diff . "</p>";   

Mathematik::addiere(100, 50); // Diese Operation haben wir auch durchgeführt, das Ergebnis aber keiner Variable zugewiesen.

// Überprüfen wir, wie viele Operationen wir insgesamt durchgeführt haben.
// Da die Eigenschaft public ist, können wir direkt über den Klassennamen darauf zugreifen.
echo "<p>Anzahl der durchgeführten Operationen (direkter Zugriff): " . Mathematik::$operationszaehler . "</p>";

// Oder wir können über die Methode darauf zugreifen.
echo "<p>Anzahl der durchgeführten Operationen (über Methode): " . Mathematik::getOperationszaehler() . "</p>";


require_once 'footer.php';
?>

<!DOCTYPE html>
<html lang = "de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Statische Eigenschaften und Methoden</title>
</head>
<body>
    <h1>Statische Eigenschaften und Methoden</h1>
    <p>In diesem Abschnitt haben wir uns mit statischen Eigenschaften und Methoden in PHP beschäftigt.</p>
    <h2>Wichtige Konzepte</h2>
    <p>
        <div>
            <pre>
1. Statische Eigenschaften
Statische Eigenschaften gehören zur Klasse selbst und nicht zu einem bestimmten Objekt. 
Sie werden mit dem Schlüsselwort "static" deklariert und können über den Klassennamen zugegriffen werden.

2. Statische Methoden
Statische Methoden können ohne Instanziierung der Klasse aufgerufen werden. 
Sie haben keinen Zugriff auf $this und können nur statische Eigenschaften und Methoden der Klasse verwenden.

3. Anwendungsfälle
Statische Mitglieder sind nützlich für:
- Zähler (wie in unserem Beispiel)
- Hilfsfunktionen, die keinen Zustand benötigen
            </pre>
        </div>
    </p>
    <p><pre>
1. Grundlagen 
a) Was ist der Unterschied zwischen "normal" (Instanz) und static?
Kehren wir zu unserer Analogie der Autofabrik zurück:

Normale (Instanz-)Eigenschaft/Methode: Gehört zu einem einzelnen Objekt.

$meinAuto->farbe: Ist die Farbe meines spezifischen Autos.

$deinAuto->starten(): Startet den Motor deines spezifischen Autos.

static-Eigenschaft/Methode: Gehört zur Klasse selbst, nicht zu einem einzelnen Objekt.

Auto::$totalProduzierteAutos: Die Gesamtzahl der Autos, die die gesamte Fabrik je produziert hat. 
Diese Information gehört nicht zu einem einzelnen Auto, sondern zum Konzept "Auto" im Allgemeinen.

Auto::pruefeProduktionsfehler(): Eine Methode, die eine allgemeine Überprüfung durchführt, nicht an einem bestimmten Auto.

b) static-Eigenschaften (Statische Eigenschaften):
Eine Variable, die von allen Objekten einer Klasse geteilt wird. Es gibt nur eine einzige Kopie. Wenn ein Objekt diesen Wert ändert, 
ändert er sich auch für alle anderen Objekte. Wird oft für Zähler oder allgemeine Einstellungen verwendet.

c) static-Methoden (Statische Methoden):
Eine Funktion, die direkt über die Klasse aufgerufen werden kann, ohne ein Objekt zu erstellen (new). 
Sie werden oft für "Hilfs"- (Utility/Helper) Funktionen verwendet, die mit der Klasse in Verbindung stehen.

d) Neue Syntax: Der ::-Operator
Um auf statische Eigenschaften und Methoden zuzugreifen, verwenden wir den :: (Scope Resolution Operator) anstelle des ->-Operators.

KlassenName::$statischeEigenschaft

KlassenName::statischeMethode()

Die wichtigste Regel: Da statische Methoden nicht zu einem Objekt gehören, kann man innerhalb einer statischen Methode das Schlüsselwort $this nicht verwenden. 
Um von innerhalb der Klasse auf andere statische Mitglieder zuzugreifen, verwendet man self::.
    </pre></p>

    <p><pre>
        Kurze Zusammenfassung
Statische Eigenschaften und Methoden bieten eine Möglichkeit, Daten und Funktionen auf Klassenebene zu organisieren, 
ohne dass eine Instanz der Klasse erstellt werden muss. Sie sind besonders nützlich für Utility-Klassen und globale Zähler.
    </pre></p>
</body>
</html>