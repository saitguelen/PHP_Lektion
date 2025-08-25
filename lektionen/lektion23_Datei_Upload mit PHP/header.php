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
    <h1>Lektion 23: Datei-Uploads mit PHP</h1>

    <p>
        <pre>
1. Grundlagen (Temel Konu)
a) Die HTML-Formular-Seite:
Um Dateien hochzuladen, müssen wir zwei zwingend erforderliche Änderungen am HTML-Formular vornehmen:

Die method des <form>-Tags muss POST sein.

Dem <form>-Tag muss das Attribut enctype="multipart/form-data" hinzugefügt werden. Dies teilt dem Browser mit, 
    dass er zusammen mit den Formulardaten auch Binärdaten wie Dateien senden wird. Ohne dies funktioniert der Datei-Upload nicht.

Für das Dateiauswahlfeld wird <input type="file" name="profilbild"> verwendet.

b) Die PHP-Seite: Das $_FILES-Superglobal
PHP speichert Informationen zu hochgeladenen Dateien nicht in $_POST, 
sondern in einem speziellen Superglobal-Array namens $_FILES. Für ein Input-Feld mit name="profilbild" enthält das $_FILES['profilbild']-Array folgende Informationen:

['name']: Der ursprüngliche Dateiname auf dem Computer des Benutzers (z. B. mein_foto.jpg).

['type']: Der MIME-Typ der Datei (z. B. image/jpeg).

['tmp_name']: Das ist das Wichtigste. Der Pfad, unter dem die Datei nach dem Upload temporär auf dem Server gespeichert wird.

['error']: Ein Fehlercode. 0 (oder die Konstante UPLOAD_ERR_OK) bedeutet, dass alles in Ordnung ist.

['size']: Die Größe der Datei in Bytes.

c) Der sichere Datei-Verarbeitungsprozess:

Zuerst wird $_FILES['profilbild']['error'] überprüft, um festzustellen, ob beim Upload ein Fehler aufgetreten ist.

Die Datei muss von ihrem temporären Speicherort (tmp_name) an einen dauerhaften Ort auf unserem Server verschoben werden. 
Die sicherste Funktion hierfür ist move_uploaded_file(). Diese Funktion verschiebt nur Dateien, die tatsächlich über einen HTTP-POST-Request hochgeladen wurden.

SICHERHEIT: Wir dürfen dem ursprünglichen Dateinamen des Benutzers (['name']) niemals vertrauen. 
Um Konflikte zu vermeiden und die Sicherheit zu erhöhen, sollten wir der Datei beim Speichern auf dem Server einen eindeutigen (unique) neuen Namen geben.
        </pre>
    </p>

   