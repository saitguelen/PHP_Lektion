<?php
// Header für alle Seiten
session_start(); // Session starten, um Benutzerdaten zu speichern

?>
<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Projekt </title>
</head>
<body>
    <h1>Lektion 21: Refactoring des Projekts mit OOP - Die Datenbank-Klasse</h1>

    <p>
        <pre>
1. Grundlagen (Temel Konu)
a- Warum Refactoring?
In unserem aktuellen Projekt hat jede Datei, die die Datenbank benötigt (login.php, register.php etc.), 
die Zeile require_once 'db_verbindung.php';. Die Verbindungsdetails ($server, $benutzer etc.) befinden sich in dieser Datei. 
Diese Methode funktioniert für kleine Projekte, aber bei größeren Projekten benötigen wir einen zentraleren und kontrollierteren Weg, um die Datenbankverbindung zu verwalten.

b- Die OOP-Lösung: Eine Database-Klasse
Wir werden die gesamte Logik der Datenbankverbindung in eine einzige Klasse "kapseln" (encapsulate). 
Diese Klasse wird nur eine einzige Verantwortung haben: die Datenbankverbindung herzustellen und zu verwalten.
 Dies ist in der Programmierung als das "Single-Responsibility-Prinzip" bekannt und ist die Grundlage für gutes Design.

c- Das Singleton-Entwurfsmuster (Singleton Pattern)
Während einer Anwendung wird in der Regel nur eine einzige Verbindung zur Datenbank benötigt. 
Für jede Seite eine neue Verbindung aufzubauen, ist ineffizient. Das Singleton-Muster ist eine Technik, die sicherstellt, 
dass von einer Klasse während der gesamten Anwendungsdauer nur ein einziges Objekt erstellt wird. Wir werden unsere Database-Klasse als Singleton entwerfen. 
So wird unser gesamtes Projekt dasselbe Datenbankverbindungsobjekt verwenden.
        </pre>
    </p>

   