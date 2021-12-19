<?php

session_start();

include('../assets/vendor/php-email-form/db.php');

 /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  // $receiving_email_address = 'contact@example.com';
  // $receiving_email_address = 'info@zainservicesltd.co.uk';

try{

  $fullname = $_POST['fullName'];
  $email = $_POST['email'];
  $sbj = $_POST['subject'];
  $msg = $_POST['message'];


  $sql = "INSERT INTO contact (fullName, email, `subject`, `message`) VALUES ('$fullname', '$email', '$sbj', '$msg');";
  

if ($dbCon->query($sql) === TRUE) {
    echo header("Location:http://localhost/z_serv");
    $_SESSION['contact_submitted'] = true;

  } else {
    echo 'Error inserting data ' . $sql . '<br>' . $dbCon->error;
  }

$dbCon->close();

}
  catch (\Exception $e){
  var_dump('oops!!!!!!!!!');exit;
}




















/*

  try {
  //code...
  $receiving_email_address = 'ajayidhikrullah@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['fullName'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  $contact->message = $_POST['message'];

  // var_dump($contact);exit();

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials


  $contact->smtp = array(
    'host' => 'http://127.0.0.1:5500/',
    'username' => '',
    'password' => '',
    'port' => '5500'
  );

  // $contact->add_message( $_POST['fullName'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

}
    catch (\Exception $e) {
      //throw $th;
      var_dump('o ti shise ooo');exit();
    }

    */
    
?>
