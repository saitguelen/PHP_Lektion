<?php
session_start();
require_once 'config.php';
?>
<!doctype html>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="de">
    <meta charset="utf-8">
    <title>Abmelden</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .messages {
            margin-bottom: 20px;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
session_destroy();
echo "Sie haben sich erfolgreich abgemeldet.<br />";
echo "<a href='register.php'>Zurück zum Formular</a>";
?>
</body>
</html>

