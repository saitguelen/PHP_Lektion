<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $myfile = fopen("readfile.txt", "w") or die ("Unable to open file!");
    $txt = "Sait gülen\n";
    fwrite($myfile,$txt);
    $txt = "Jane Doe\n";
    fwrite($myfile,$txt);
    fclose($myfile);

    ?>
</body>
</html>