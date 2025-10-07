<?php
/*
 Szenario: Sie werden ein Benotungssystem für Schüler erstellen.
Anforderungen:
1. erstellen Sie zwei Arrays:
￼
php
$ogrenciler = ["Ahmet", "Ayşe", "Mehmet", "Zeynep"];
 $notes = [85, 92, 78, 95];
2. eine Funktion schreiben: noteListesi($graduates, $grades)
3. listet jeden Schüler und seine Note auf:
￼
Ahmet: 85
 Ayşe: 92
...
4. Finde und zeige die höchste Note und den Namen dieses Schülers
Bonus Challenge:
- Berechne die Durchschnittsnote
- Bezeichne die Noten 90 und mehr als "gut", 80-89 als "gut" und darunter als "verbesserungswürdig".
*/
$students = array("Ahmet","Ayse","Mehmet","Nesibe","Jakob","Mucteba");
$notes    = array(85,92,78,95,70,65);

function noteList($students,$notes){
    for($i=0;$i<count($students);$i++){
        echo $students[$i].": ".$notes[$i]."<br />";
    }
    $k= $notes[0];
    $enyuksekIndex = 0;
    for ($i=0;$i<count($notes);$i++){
        if($notes[$i]>$k){
            $k=$notes[$i];
            $enyuksekIndex=$i;
        }
    }
    echo "en yüksek not alan talebe ve notu:<br>";
    echo $students[$enyuksekIndex].": ".$k."<br />";

    echo "<hr>";
    echo "Simdi not ortalamasini bulalim:<br>";
    $summe =0;
    for ($i=0;$i<count($notes);$i++){
        $summe += $notes[$i];

    }
    $Avg = $summe/count($notes);
    echo "Grubun not Ortalamasi: ". $Avg."<br>";

    echo "<h3>Öğrenci Listesi:</h3>";
    for($i=0; $i<count($students); $i++){
        $etiket = "";
        if($notes[$i] >= 90){
            $etiket = " - Pekiyi 🌟";
        }elseif($notes[$i] >= 80){
            $etiket = " - İyi ✓";
        }else{
            $etiket = " - Geliştirilebilir ⚠️";
        }
        echo $students[$i] . ": " . $notes[$i] . $etiket . "<br />";
    }
    echo "<hr>";
    foreach ($students as $index => $student) {
        echo $student . ": " . $notes[$index] . "<br />";
    }
    $enYuksek = max($notes);  // En yüksek değer
    $ortalama = array_sum($notes) / count($notes);

    echo "ortalama: ".$ortalama."<br>";
    echo "en yüksek not: ".$enYuksek."<br>";


}
noteList($students,$notes);