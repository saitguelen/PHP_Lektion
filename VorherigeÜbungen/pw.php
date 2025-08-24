<?php
    echo "<p>Wie heißen Sie? Vorname bitte.</p>";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <style>
        body{font-family: Helvetica, sans-serif;
             font-size: 18px;
        }
        input{font: inherit;}
        div{margin-top: 1.5em;}
    </style>
</head>
<body>
<form action="pw.php" method="get">

<div>
    <p>
    <label for="vn">Name</label>
</p>
    <input type="text" name="vorname" id="vn" size="25">
</div>
<div>
    <p>
    <label for="vn">Passwort</label>
</p>
    <input type="password" name="passwort" id="ps" size="25">
</div>
<div>
    <input type="submit" value="Anmelden">
    <input type="reset" value="Zurücksetzen">
</div>
</form>  
</body>
</html>
<?php
if((isset($_GET["vorname"]) && isset($_GET["passwort"]))){
    $eingabe_vorname = $_GET["vorname"];
    $eingabe_passwort=$_GET["passwort"];
    if($eingabe_vorname == "Paul" AnD $eingabe_passwort=="1234"  Or $eingabe_vorname == "paul" AnD $eingabe_passwort=="1234" )
        echo "<b>Hallo Paul!</b>";
    else
        echo "Zugriff nicht erlaubt!";
}
?>