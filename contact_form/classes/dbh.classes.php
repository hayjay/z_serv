<?php

class Dbh{
        
    protected function connect(){
        try{
            
    //    $dbServername = 'localhost';
       $dbUsername = "root";
       $dbPassword = "";
    //    $dbName = "zainsecurity";
    
       $dbCon = new PDO ('mysql:host=localhost' . ';dbname=zainsecurity', $dbUsername, $dbPassword);
       return $dbCon;
        // $pdo = new PDO($dbCon, $this->dbUsername, $this->dbPassword);
    
    
    }
    catch (PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";

        die();
    }


        // $dbCon = 'mysqli:host=' . $this->dbServername . ';dbname=' . $this->dbName;
        // $pdo = new PDO($dbCon, $this->dbUsername, $this->dbPassword);
        // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // // return $pdo;



        // // $dbCon = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
        // // return $dbCon;
        // // if ($dbCon->connect_error) {
        // //     die("Failed to connect" . $conn->connect_error);
        // //     # code...
        // // }
    
    }


}
?>