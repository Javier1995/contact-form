<?php
    $name         = $_POST['name'];
    $visitorEmail = $_POST['email'];
    $message      = $_POST['message'];


    $emailFrom       = 'quiroga218@outlook.es';
    $emailSubject    = 'New form Submission';
    $emailBody       = "User Name: {$name}.\n".
                       "User Email. $visitorEmail.\n";

    $to = "quiroga218@gmail.com";

     $headers = "From: $emailFrom\r\n";
     $headers.="Reply-to: $visitorEmail\r\n";
     mail($to, $emailSubject, $emailBody, $headers);

     header('Location:index.html');
?>