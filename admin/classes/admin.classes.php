<?php
include "contact_form/classes/dbh.classes.php";
class Admin extends Dbh{
    public function getUsers(){
        $sql = "SELECT * FROM contact";
        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()){
            echo $row['subject'] . '<br>';
        }
    }

    // public function getUsersStat()

}



$sql = "SELECT * FROM contact ORDER BY id DESC;";
$result = mysqli_query($dbCon, $sql);
$checkResult = mysqli_num_rows($result);

if ($checkResult > 0) {
    // while ($eachRow = mysqli_fetch_assoc($result)) {
    //     $i_d = $eachRow['id'];
    //     $fn = $eachRow['fullName'];

    // } 
}