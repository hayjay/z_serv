<?php
    class contactUsContr extends ContactUs {
        private $fullName;
        private $email;
        private $subject;
        private $message;

        public function __construct($fullName, $email, $subject, $message){
            $this->fullname = $fullName;
            $this->email = $email;
            $this->subject = $subject;
            $this->message = $message;
        }


        //error handler to check for empty input
        private function emptyInput(){
            $result;
            if(empty($this->fullname) || empty($this->email) || empty($this->subject) || empty($this->message)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        

    }


?>