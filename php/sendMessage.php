<?php

require ("../sendgrid-php/sendgrid-php.php");

   // validation expected data exists
   if(!isset($_POST['email']) ||
   !isset($_POST['name']) ||
   !isset($_POST['subject']) ||
   !isset($_POST['your-message'])){
    echo "<script type='text/javascript'>
    alert('We are sorry, but there appears to be a problem with the form you submitted.');
    window.location.href='../contact_us.php';
    </script>";  
    }

$from = new SendGrid\Email(null, "princeobatest@gmail.com");
$to = new SendGrid\Email(null, "pasan1486381@gmail.com");
$subject = $_POST['subject'];
$message = $_POST['your-message'];
$name=$_POST['name'];
$email=$_POST['email'];
$error_message = "";
$email_message="";
$string_exp = "/^[A-Za-z .'-]+$/";
 
if(!preg_match($string_exp,$name)) {
  $error_message .= 'The  Name you entered does not appear to be valid';
}

if(strlen($error_message) > 0) {
    echo "<script type='text/javascript'>alert('".$error_message."');window.location.href='../contact_us.php';</script>";
}

 
function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }


  $email_message .= "Name: ".clean_string($name)."\r\n";
  $email_message .= "Email: ".clean_string($email)."\r\n";
  $email_message .= "Subject: ".clean_string($subject)."\r\n";
  $email_message .= "Message: ".clean_string($message)."\r\n";

  $content = new SendGrid\Content("text/plain", $email_message);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  $apiKey = getenv('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');
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($mail);
  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();

//mail($to,$subject,$email_message,$headers);
// echo "<script type='text/javascript'>
// alert('Thank you for contacting us. We will be in touch with you very soon.');
// window.location.href='../contact_us.php';
// </script>";  

?>