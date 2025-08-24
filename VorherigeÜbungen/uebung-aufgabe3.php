<?php
$name = $_POST["name"];
$passwort = $_POST["passwort"];
//$name= "Paul";
//$passwort="123";
if ($name == "Paul" Or "paul" AnD $passwort == "123") 
    echo "Herzlichen Willkommen,  $name!";
else
    echo "$name!, Zugriff ist nicht erlaubt.";

?>