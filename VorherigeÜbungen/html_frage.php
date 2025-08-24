<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<style>
</style>
<body>
<form method="GET">
<h1>HTML-Quiz</h1>
<label>Ihr Vorname:</label>
<input type ="text" id = "vname" name = "vname">
<h1>Wofür steht die Abkürzung HTML?</h1>
<br>
<input type = "radio" value = "Hypertext Making Language" name ="quest" id="quest1">Hypertext Making Language<br>
<input type = "radio" value = "Hypertext Markup Language" name ="quest" id="quest2">Hypertext Markup Language<br>
<input type = "radio" value = "Hypertext Marker Language" name ="quest" id="quest3">Hypertext Marker Language<br>
<input type = "radio" value = "Hyper Textlink Marker Language" name ="quest" id="quest4">Hyper Textlink Marker Language<br>
<br>
<input type = "submit" value = Abschicken name ="button" id = "button">
</form>
</body>
</html>
<?php
    //isset prüft ob quest gesetzt ist 
    if (isset($_GET["quest"])){
        $quest = $_GET["quest"];
    if ($quest == "Hypertext Markup Language"){
        echo "Das ist Richtig!";}
    else{
        echo "Das ist Falsch!";}
    }
?>
</body>
</html>