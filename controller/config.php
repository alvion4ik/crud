<?php
    $servername = 'localhost';
    $database = 'crud';
    $username = 'admin';
    $password = 'admin123';
    $sqlConf = "mysql:host=$servername;dbname=$database;";
    $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    try {
        $my_Db_Connection = new PDO($sqlConf, $username, $password, $dsn_Options);
    } catch (PDOException $error) {
        echo 'Connection error: ' . $error->getMessage();
    }


