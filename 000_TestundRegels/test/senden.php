<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['nachricht']);


echo "<h1> Danke, $name ! </h1>";
echo "<p> Ihre E-Mail Adresse: $email </p>";
echo "<p> Ihre Nachricht : $message </p>";
echo "<p>Ihre Formulardaten wurden erfolgreich empfangen.</p>";
}else{
    echo "Sie sind nicht berechtigt, direkt auf diese Seite zuzugreifen.";

}

?>