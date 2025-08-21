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
    <h1>Lektion 22: Weiter mit OOP - Erstellen der User-Klasse</h1>

    <p>
        <pre>
In dieser Lektion erstellen wir eine User-Klasse, die die gesamte Geschäftslogik und die Datenbankoperationen 
für Benutzer verwalten wird, und wir schreiben unsere Dateien register.php und login.php um, damit sie diese Klasse verwenden.

1. Grundlagen (Temel Konu)
a) Was ist eine "Model"-Klasse?
In der Webentwicklung werden Klassen, die die grundlegenden Datenstrukturen unserer Anwendung repräsentieren 
(z.B. User, Product, Order), oft als "Model"-Klassen bezeichnet. Diese Klassen bündeln die Daten, 
die zu dieser Struktur gehören (Eigenschaften), und die Operationen, die mit diesen Daten durchgeführt werden können (Methoden). 
Unsere User-Klasse wird unsere erste Model-Klasse sein.

b) Was wird unsere User-Klasse tun?

Informationen wie Benutzername und Passwort speichern.
Einen bestimmten Benutzer in der Datenbank anhand seines Namens finden (findByUsername).
Einen neuen Benutzer in der Datenbank registrieren (create).

c) Warum verwenden wir statische Methoden?
Um einen Benutzer in der Datenbank zu suchen (findByUsername) oder einen neuen Benutzer zu erstellen (create), 
haben wir noch kein "Benutzer-Objekt" zur Verfügung. Solche Operationen sollten unabhängig von einem Objekt 
direkt über die Klasse selbst ausgeführt werden können. Deshalb definieren wir diese Methoden als static.
        </pre>
    </p>

   