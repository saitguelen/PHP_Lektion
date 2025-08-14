<?php
require_once 'header.php';

echo "<h1>Abstrakte Klassen und Interfaces</h1>";

// --- 1. DAS INTERFACE ---
// Dies ist ein Vertrag. Jede Klasse, die dies implementiert, muss eine ciz()-Methode haben.
interface Zeichnbar {
    public function zeichne();
}

// --- 2. DIE ABSTRAKTE KLASSE ---
// Dies ist ein unvollständiger Bauplan. Wir können keine Objekte direkt davon erstellen.
abstract class Form {
    // Eine normale Eigenschaft
    protected $farbe;

    // Ein normaler Konstruktor
    public function __construct($farbe) {
        $this->farbe = $farbe;
    }

    // Eine normale Methode
    public function getFarbe() {
        return $this->farbe;
    }

    // ABSTRAKTE METHODE: Kein Code-Körper. Jede Klasse, die diese Klasse erbt, muss diese Methode ausfüllen.
    abstract public function berechneFlaeche();
}

// --- 3. KONKRETE KLASSEN ---
// Quadrat erbt die Eigenschaften von Form und implementiert den Zeichnbar-Vertrag.
class Quadrat extends Form implements Zeichnbar {
    private $seite;

    public function __construct($farbe, $seite) {
        parent::__construct($farbe); // Ruft den Konstruktor der Elternklasse auf
        $this->seite = $seite;
    }

    // Wir füllen die obligatorische Methode von Form aus.
    public function berechneFlaeche() {
        return $this->seite * $this->seite;
    }

    // Wir füllen die obligatorische Methode von Zeichnbar aus.
    public function zeichne() {
        echo "<div style='width: " . $this->seite . "px; height: " . $this->seite . "px; background-color: " . $this->getFarbe() . ";'></div>";
    }
}

class Kreis extends Form implements Zeichnbar {
    private $radius;

    public function __construct($farbe, $radius) {
        parent::__construct($farbe);
        $this->radius = $radius;
    }

    public function berechneFlaeche() {
        return pi() * $this->radius * $this->radius;
    }

    public function zeichne() {
        echo "<div style='width: " . ($this->radius * 2) . "px; height: " . ($this->radius * 2) . "px; background-color: " . $this->getFarbe() . "; border-radius: 50%;'></div>";
    }
}

// --- 4. OBJEKTE VERWENDEN ---
// $form = new Form('blau'); // WIRD EINEN FEHLER AUSLÖSEN! Weil man keine Objekte von abstrakten Klassen erstellen kann.

$quadrat1 = new Quadrat('red', 100);
echo "<p>Die Fläche des roten Quadrats beträgt: " . $quadrat1->berechneFlaeche() . "px</p>";
$quadrat1->zeichne();

echo "<hr>";

$kreis1 = new Kreis('blue', 75);
echo "<p>Die Fläche des blauen Kreises beträgt: " . $kreis1->berechneFlaeche() . "px</p>";
$kreis1->zeichne();

require_once 'footer.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abstrakte Klassen und Interfaces</title>

    <body>
        <h1>Abstrakte Klassen und Interfaces</h1>
        <p>In diesem Abschnitt haben wir uns mit abstrakten Klassen und Interfaces in PHP beschäftigt.</p>
        <h2>Wichtige Konzepte</h2>
        <p><pre>
1. Grundlagen 
Das Problem: Stellen wir uns vor, wir arbeiten in einem großen Projekt mit mehreren Entwicklern. 
Wir möchten sicherstellen, dass jede von ihnen geschriebene "Datenbankverbindung"-Klasse Methoden namens verbinden() und abfrageAusfuehren() hat. Wenn jemand seine Methode holeDaten() nennt, 
wird der Code an anderer Stelle im Projekt brechen. Abstrakte Klassen und Interfaces dienen dazu, diese Konsistenz zu erzwingen.
        </pre></p>
        <p>
            <div>
                <pre>
1. Interfaces
Interfaces sind Verträge. Eine Klasse, die ein Interface implementiert, muss alle Methoden des Interfaces definieren.
Sie sind nützlich, um sicherzustellen, dass bestimmte Methoden in verschiedenen Klassen vorhanden sind.
<pre>
Dies ist ein zu 100% abstrakter Vertrag. Es enthält nur die Namen der Methoden, die vorhanden sein müssen; die Methoden selbst sind komplett leer. Es enthält keine Eigenschaften (properties).
Analogie: Stell dir ein "USB-Gerät"-Interface vor. Dieses Interface sagt: "Wenn du behauptest, ein USB-Gerät zu sein, 
musst du die Methoden sendeDaten() und empfangeDaten() haben." Sowohl ein USB-Stick als auch eine USB-Maus müssen diesem Interface folgen, 
aber beide implementieren diese Methoden auf ihre eigene, unterschiedliche Weise.

Regeln:
In einem Interface haben Methoden keinen Code-Körper ({}).
Eine Klasse extends kein Interface, sie implements (implementiert) es und akzeptiert damit den Vertrag.
Eine Klasse kann mehrere Interfaces gleichzeitig implements, aber nur eine einzige Klasse extends. Das ist der größte Vorteil von Interfaces.
</pre>

2. Abstrakte Klassen
Abstrakte Klassen sind unvollständige Klassen. Sie können keine Objekte direkt von ihnen erstellen.
Sie können jedoch konkrete Klassen erstellen, die von ihnen erben und die fehlenden Methoden implementieren.
<pre>
Dies ist eine unvollständige Klassenvorlage. Einige Methoden sind fertig implementiert, andere sind leer und sagen: "Jeder, der diese Klasse erbt, muss diese leeren Methoden ausfüllen."
Analogie: Denk an eine "Fahrzeug"-Klasse. Jedes Fahrzeug kann eine Farbe ($farbe) haben und die getFarbe()-Methode kann funktionieren.
Das ist eine normale Methode. Aber die starten()-Methode ist für jedes Fahrzeug anders (ein Auto startet mit dem Zündschlüssel, ein Fahrrad mit den Pedalen). 
Deshalb definieren wir die starten()-Methode als abstrakt. Das heißt, wir geben nur ihre Signatur an, lassen den Körper aber leer.

Regeln:
Man kann kein Objekt direkt von einer abstrakten Klasse mit new erstellen. Der Bauplan ist unvollständig.
Eine Klasse, die eine abstrakte Klasse extends (erweitert), muss alle abstrakten Methoden der Elternklasse implementieren (ausfüllen).
</pre>

3. Anwendungsfälle
Abstrakte Klassen und Interfaces sind nützlich für:
- Die Definition von gemeinsamen Methoden, die in mehreren Klassen verwendet werden.
- Die Schaffung von flexiblen und erweiterbaren Code-Strukturen.
                </pre>
            </div>
        </p>
        <p><pre>
1. Grundlagen
a) Was ist der Unterschied zwischen Interfaces und abstrakten Klassen?
Interfaces definieren nur die Methodensignaturen, während abstrakte Klassen auch Implementierungen enthalten können.
Interfaces sind ideal für lose Kopplung, während abstrakte Klassen eine gemeinsame Basis bieten.

b) Wann sollte ich ein Interface und wann eine abstrakte Klasse verwenden?
Verwenden Sie ein Interface, wenn Sie sicherstellen möchten, dass verschiedene Klassen bestimmte Methoden implementieren.
Verwenden Sie eine abstrakte Klasse, wenn Sie eine gemeinsame Basis mit gemeinsamen Implementierungen schaffen möchten.
    </pre></p>

    </body>
</head>