<?php
//beginn die session
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $_SESSION["favcolor"] = "blue";
    $_SESSION["favanimal"] = "Horse";
    echo "Session variables are set.<br>";
    echo "Favori color is: " . $_SESSION["favcolor"] . "<br>";
    echo "Favori animal is: " . $_SESSION["favanimal"] . "<hr><br>";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>
</body>

</html>