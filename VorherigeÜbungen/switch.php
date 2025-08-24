<?php
//Switch-Konstrukt: Bei Java dürfen wir kein long nehmen
//Bei Java auch keine Gleitpunktzahlen double, float 
//boolean in Java geht auch nicht.


$dasda = "Yoghurt";
switch($dasda){
    case "Apfel":
            echo "$dasda ist ein Obst";
            break;
    case "Karotte":
            echo "$dasda ist ein Gemüse";
            break;
    case "Käse":
            echo "$dasda ist ein Milchprodukt";
            break;
    default:
        echo "Kenne ich nicht";
}
?>