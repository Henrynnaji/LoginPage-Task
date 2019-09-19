<?php

    define('DBNAME', 'users');
    define('DBUSER', 'root');
    define('DBPASS', 'oparaprosper081');

    try{

    $conn = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    } catch(PDOException $err) {

        echo $err->getMessage();
    }

?>