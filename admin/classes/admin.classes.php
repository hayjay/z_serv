<?php
include "contact_form/classes/dbh.classes.php";
class Admin extends Dbh{
    public function getUsers(){

        $sql = "SELECT * FROM contact ORDER BY id DESC;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $nam = $stmt->fetchAll();

        foreach ($nam as $name) {
                echo $name['id'] . '<br>' ;
        }

        // $checkResult = mysqli_num_rows($result);
        // var_dump($check);

        

        
        // while($result = $stmt->fetch()){
        //     // var_dump($result);exit();
        //     $id = $result['id'] . '<br>';
        //     echo $id;

        // }


    //     if ($checkResult > 0) {
    //         // while ($eachRow = mysqli_fetch_assoc($result)) {
    //         //     $i_d = $eachRow['id'];
    //         //     $fn = $eachRow['fullName'];
    //         // }
    // }
}



}