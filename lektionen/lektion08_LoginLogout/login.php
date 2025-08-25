<?php
// Session-Management starten! Das muss vor allem anderen stehen.
session_start();

$fehler = [];
$benutzername = $_POST['benutzername'] ?? '';

if (isset($_POST['senden'])) {
    $passwort = $_POST['passwort'] ?? '';

    if (empty(trim($benutzername))) {
        $fehler[] = "Das Feld Benutzername darf nicht leer sein.";
    }
    if (empty($passwort)) {
        $fehler[] = "Das Feld Passwort darf nicht leer sein.";
    }

    // Vorerst seien Benutzername "jakob" und Passwort "1234".
    if (empty($fehler) && ($benutzername === 'jakob' && $passwort === '1234')) {
        // LOGIN ERFOLGREICH!
        // Speichern wir den Benutzernamen im Session-Array.
        $_SESSION['benutzer'] = $benutzername;

        // Leiten wir den Benutzer zur Profilseite weiter.
        header('Location: profil.php');
        exit(); // Es ist wichtig, die Skriptausführung nach einer Weiterleitung zu stoppen.
    } else {
        $fehler[] = "Benutzername oder Passwort ist falsch.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Bitte einloggen</h1>
    <p>(Benutzername: jakob, Passwort: 1234)</p>
    
    <?php if (!empty($fehler)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($fehler as $err): ?>
                    <li><?php echo $err; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <p>Benutzername: <input type="text" name="benutzername" value="<?php echo htmlspecialchars($benutzername); ?>"></p>
        <p>Passwort: <input type="password" name="passwort"></p>
        <p><button type="submit" name="senden">Login</button></p>
    </form>
</body>
</html>