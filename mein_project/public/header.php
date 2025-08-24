<?php

// session_start() ist hier am besten platziert, um das Session-Management auf jeder Seite zu starten.
session_start();

?>
<!DOCTYPE html>
<html lang="en,de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saits Projekt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 15px;
            border-left: 4px solid #007cba;
            overflow-x: auto;
            border-radius: 5px;
            margin: 15px 0;
        }

        .code-output {
            background-color: #e8f6f3;
            padding: 15px;
            border: 1px solid #16a085;
            margin: 10px 0;
            border-radius: 5px;
        }

        .example-box {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .error {
            color: #e74c3c;
            font-weight: bold;
        }
        .success {
            color:green; 
            border:1px solid green; 
            padding: 10px; margin-bottom:15px; 
            font-weight: bold;
        }

        .info {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        code {
            background-color: #f1f2f6;
            padding: 2px 5px;
            border-radius: 3px;
        }



    </style>
</head>
<body>
    <div class="container"></div>
    
