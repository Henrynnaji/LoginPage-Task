<?php

class database {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    protected function Dbconnect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname= "users";
        $this->charset = "utf8mb4"; 


    try {
        $dsn ="mysql:host=".$this->servername. ";dbname=". $this->dbname. ";charset".$this->charset;

        $pdo = new PDO ($dsn, $this->username, $this->password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
 catch (PDOException $e) {
    echo "Somthing actually went wrong".$e->getMessage();
        }
    } 
}

?>
