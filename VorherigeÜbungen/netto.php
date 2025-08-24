<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Netto, Brutto</title>
    <style>
        #ausgabe{margin-top: 20px;}
    </style>
</head>
<body>
<form action="netto.php" method="get">
<p>
    <label for="nettobetrag">Nettobetrag</label>

    <input 
           type="text" 
           id="nettobetrag"
           name="netto"
           size="10"
           maxlength="20"      
    >
</p> <p> Brutto = Netto + Netto*Mwst./100
    Brutto = Netto*(1 + Mwst./100)</p>
    <label for="mwst-satz">MwSt.-Satz</label>
<br>
    <select name="mwst" id="mwst-satz">
            <option value="7">7%</option>
            <option value="19">19%</option>
    </select> 


<br>
<input type="submit" value="Abschicken">
</form>
<!-- Hier kommt die Ausgabe -->
<div id="ausgabe">
<?php
    if(!empty($_GET["netto"])){
        $netto = $_GET["netto"];
        $brutto = $netto*(1 + ($_GET["mwst"])/100);
        echo "$netto € ergibt $brutto € bei einem MwSt.Satz von: " . $_GET["mwst"] . "%";
    }
?>
</div>   
</body>
</html>