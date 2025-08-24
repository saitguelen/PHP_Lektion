<?php

namespace App; // Auch diese Klasse ist im "App"-Namensraum.

use mysqli;

class User
{
    public static function findByUsername($username, mysqli $db_connection)
    {
        $sql = "SELECT * FROM benutzer WHERE benutzername =?";
        $stmt = $db_connection->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        }
        return null;
    }

    public static function create($username, $email, $password, mysqli $db_connection)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO benutzer (benutzername, email, passwort) VALUES (?, ?, ?)";
        $stmt = $db_connection->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            // Hinweis: Ein Commit ist nicht nötig, da Autocommit standardmäßig aktiviert ist.
            return true;
        }
        return false;
    }
    public static function updateProfilePicture($username,$filepath, mysqli $db_connection){
        $sql = "UPDATE benutzer SET profilbild = ? WHERE benutzername =?";
        $stmt=$db_connection->prepare($sql);
        // "ss" -> gibt an, dass beide Parameter Strings sind
        $stmt->bind_param("ss",$filepath,$username);
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
