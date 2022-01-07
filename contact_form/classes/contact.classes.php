<?php
class contactUs extends Dbh{
    protected function setContact($fullName, $email, $subject, $message){
        $stmt = $this->connect()->prepare('INSERT INTO contact (fullName, email, `subject`, `message`) VALUES (?, ?, ?);');

        if(!$stmt->execute(array($fullName, $email, $subject, $message))){
            $stmt = null;
            header('Location: ../index.php?error=failed o');
            exit();
        }
        $stmt = null;
    }
}