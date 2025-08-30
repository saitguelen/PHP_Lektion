<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
            font-weight: bold;
        }

        div {
            background-color: aqua;
            border-radius: 20px;
            padding: 25px;
            width: 400px;
            min-height: 160px;
            margin: auto;
        }
    </style>
</head>

<body>


    <?php

    //Wir definieren variable und set to leer wert(values)
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name muss nicht leer sein";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Nur Buchstaben und weißer Space erlaubt";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "E-Mail ist erforderlich";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Ungültiges email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Ungültige  URL";
            }
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender ist erforderlich";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <div>
        <h2>PHP Form Validation Beispiel</h2>
        <p><span class="error">* required field</span></p>
        <br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            E-Mail: <input type="email" name="email">
            <span class="error">* <?php echo $emailErr ?></span>
            <br><br>
            Webseite: <input type="text" name="webseite">
            <span class="error">* <?php echo $websiteErr ?></span>
            <br><br>
            Kommentar: <textarea name="comment" rows="5" cols="45"></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="Frau">Frau
            <input type="radio" name="gender" value="Herr">Herr
            <input type="radio" name="gender" value="divers">Divers
            <span class="error">* <?php echo $genderErr ?></span>
            <br><br>
            <input type="submit" name="submit" value="Schicken">
            <input type="reset" name="reset" value="Zurücksetzen">
            <br>
            <hr>


        </form>
    </div>
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo "The time is " . date("h:i:sa");
    echo "<br>";
    echo "The time is " . date("h:i:s");
    echo "<br>";
    echo "TimeStamp: ".mktime(15,15,15, 10,2,2025);
    echo "<br>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("d-M-Y H:i:s");
    
    ?>

</body>

</html>