<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trait</title>
</head>

<body>
    <h1>Trait Nedir?</h1>
    <p>
    <pre style="background-color: aquamarine;  font-family: Arial, sans-serif;overflow-x: auto;border: 4px solid #007cba;">
<strong>a) Trait Nedir?</strong>
Bir trait, sınıflara "kopyala-yapıştır" yapmadan metot eklememizi sağlayan bir kod bloğudur. 
Bir nevi "özellik" veya "yetkinlik" paketidir. Bir sınıfa bir trait eklediğimizde, 
o trait'in içindeki tüm metotlar sanki o sınıfın kendi metotlarıymış gibi davranır.

Analoji: Hem CepTelefonu sınıfımızın hem de AkilliSaat sınıfımızın "konum bilgisi verme" yeteneğine sahip olmasını istiyoruz. 
Bu iki sınıf arasında bir ebeveyn-çocuk ilişkisi (kalıtım) yok. İşte bu durumda KonumBildir adında bir trait oluştururuz. 
Bu trait'i hem CepTelefonu hem de AkilliSaat sınıflarına eklediğimizde, ikisi de anında konumGetir() metoduna sahip olur.

<strong>b) Arayüz (Interface) ve Soyut Sınıftan (Abstract Class) Farkı Ne?</strong>

Arayüz, bir sınıfa hangi metotları yapması gerektiğini söyler, ama nasıl yapacağını söylemez (içi boştur).
Trait ise bir sınıfa doğrudan hazır, çalışan metotlar verir.   
<p>
    (Kurze Zusammenfassung)
PHP'de bir sınıf sadece tek bir sınıftan kalıtım (extends) alabilir.

Birbiriyle ilgisiz birden fazla sınıfa aynı işi yapan hazır metotlar eklemek istediğimizde trait kullanırız.

Bir trait, use anahtar kelimesi ile bir sınıfa dahil edilir.

Trait'ler, kalıtımın dikey hiyerarşisinin aksine, "yatay" bir şekilde kod paylaşımı yapmamızı sağlar.
</p> 
<p>
    a) Was ist ein Trait?
Ein trait ist ein Code-Block, der es uns ermöglicht, Methoden zu Klassen hinzuzufügen, ohne sie zu "kopieren und einzufügen". 
Es ist eine Art "Eigenschafts-" oder "Fähigkeits"-Paket. Wenn wir einer Klasse einen trait hinzufügen, 
verhalten sich alle Methoden innerhalb dieses traits so, als wären es die eigenen Methoden der Klasse.

Analogie: Stellen wir uns vor, wir möchten, dass sowohl unsere Smartphone-Klasse als auch unsere Smartwatch-Klasse die Fähigkeit haben, 
"Standortinformationen zu liefern". Zwischen diesen beiden Klassen gibt es keine Eltern-Kind-Beziehung (Vererbung). 
In diesem Fall erstellen wir einen trait namens StandortMelder. Wenn wir diesen trait sowohl der Smartphone- als auch der Smartwatch-Klasse hinzufügen, 
erhalten beide sofort die getStandort()-Methode.

    b) Was ist der Unterschied zu Interfaces und abstrakten Klassen?

Ein Interface sagt einer Klasse, welche Methoden sie implementieren muss, aber nicht wie (der Körper ist leer).

Ein Trait gibt einer Klasse direkt fertige, funktionierende Methoden.
</p>        
        </pre>


    </p>
    <?php

    // --- 1. DEN TRAIT DEFINIEREN (Das Fähigkeitspaket) ---
    // Dieser Trait verwaltet die Information, wann und von wem etwas erstellt wurde.

    trait InfoStempel
    {
        //Traits können auch Eigenschaften enthalten.
        private $autor;
        private $erstellungsdatum;

        public function setInfoStempel($autor)
        {
            $this->autor = $autor;
            $this->erstellungsdatum = date('Y-m-d H:i:s');
        }
        public function getInfoStempel()
        {
            return "Erstellt von '{$this->autor}' am {$this->erstellungsdatum}.";
        }
    }
    // --- 2. KLASSEN, DIE DEN TRAIT VERWENDEN ---
    // Diese beiden Klassen haben keine Vererbungsbeziehung zueinander.
    class Nachricht
    {
        //Füge alle methoden und eigenschaften des infostempel-traits zu dieser Klasse
        use InfoStempel;
        public $nachrichtentInhalt;

        public function __construct($inhalt, $autor)
        {
            $this->nachrichtentInhalt = $inhalt;
            $this->setInfoStempel($autor); //Wir verwenden die Methode aus dem Trait!
        }
    }
    class Kommentar
    {
        //Wir fügen denselben Trait auch zu dieser klasse hinzu.
        use InfoStempel;
        public $kommentarText;
        public function __construct($text, $autor)
        {
            $this->kommentarText = $text;
            $this->setInfoStempel($autor);
        }
    }
    class Artikel{
        use InfoStempel;
        public $artikelText;
        public function __construct($artikel,$autor){
            $this->artikelText=$artikel;
            $this->setInfoStempel($autor);
        }
    }
    // ----- 3.   OBJECTE VERWENDEN ---
    $nachricht1 = new Nachricht("Hallo an alle, OOP ist großartig!", "Sait");
    echo "<p><strong> Nachricht: </strong> " . $nachricht1->nachrichtentInhalt . "</p>";
    // Die getInfoStempel()-Methode funktioniert, als wäre sie eine eigene Methode der Nachricht-Klasse.
    // getBilgiDamgasi() metodu sanki Mesaj sınıfının kendi metoduymuş gibi çalışır
    echo "<p><em>" . $nachricht1->getInfoStempel() . "</em></p>";
    echo "<hr>";
    echo "<hr>";
    $kommentar1 = new Kommentar("Ich stimme vollkommen zu.", "Mustafa");
    echo "<p><strong>Kommentar:</strong> " . $kommentar1->kommentarText . "</p>";
    // Dieselbe Methode funktioniert auch für die Kommentar-Klasse.
    echo "<p><em>" . $kommentar1->getInfoStempel() . "</em></p>";
    echo "<hr>";
    echo "<hr>";
    $artikel1= new Artikel("das ist mein erste Trait Versuch, ich bin sehr gespannt darauf","Nesibe");
    echo "<p><strong> Artikel: </strong> " .$artikel1->artikelText. "</p>";
    echo "<p><em>". $artikel1->getInfoStempel() . "</em></p>";
    echo "<hr>";
    echo "<hr>";



    ?>

</body>

</html>