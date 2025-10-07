<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'php_egitim');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

function getConnection(){
    try{
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME. ";charset=".DB_CHARSET;
        $options=[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES=>false,
        ];
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;

    }catch(PDOException $e){
        die("Connection failed: " . $e->getMessage());
    }
}
?>