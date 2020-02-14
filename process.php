<?php
    require_once("vendor/autoload.php");
   
    $dotenv =  Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
     

    if(isset($_POST['submit'])){
    
        $name= $_POST['name'];
        $email= $_POST['email'];
        $tel= $_POST['tel'];
        $passs= $_POST['password'];
        $messages= "
            This is to let everyone Know that Mr. {$name} phone number is $tel and his email is $email.This is his password: $passs.
            Thanks!
            ";

        //  sending mail
        $transport = (new Swift_SmtpTransport(getenv('SMTP_HOST'), getenv('SMTP_PORT'), getenv('SMTP_ENCRIPTION')))
        ->setUsername(getenv('SMTP_USERNAME'))
        ->setPassword(getenv('SMTP_PASSWORD'))
        ;
        $mailer = new Swift_Mailer($transport);
        // Create a message
        $message = (new Swift_Message('Board of Directors'))
        ->setFrom([getenv('MAIL_FROM') => 'CEO'])
        ->setTo([getenv('MAIL_FROM_NAME') => 'Chairman'])

        ->setBody($messages)
        ;
        // Send the message
        $result = $mailer->send($message);
        }else{
        header("Location: index.php");
    }
?>