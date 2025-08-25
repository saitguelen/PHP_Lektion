<?php
$anrede = $_POST["anrede"];
$nachname = $_POST["nachname"];
$lieblingseis = $_POST["lieblingseis"];
$land = $_POST["land"];
echo "<h1>Hallo, " . $anrede .$nachname. "<br/>";
echo "<h1>Ihr Lieblingseis ist: $lieblingseis </h1><br/>";
echo "<h1>Sie  haben uns aus  $land abgestimmt. Herzlichen Dank!</h1><br/>";
?>