<?php

class Dbh{

       private $dbServername = 'localhost';
       private $dbUsername = "root";
       private $dbPassword = "";
       private $dbName = "zainsecurity";
    
    protected function connect(){

        $dbCon = 'mysqli:host=' . $this->dbServername . ';dbname=' . $this->dbName;
        $pdo = new PDO($dbCon, $this->dbUsername, $this->dbPassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;



        // $dbCon = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
        // return $dbCon;
        // if ($dbCon->connect_error) {
        //     die("Failed to connect" . $conn->connect_error);
        //     # code...
        // }
    
    }


}
?>