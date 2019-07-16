<?php
use Namespaces\Classe\Mailer;

require "./vendor/autoload.php";

// // Create the Transport
 //$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
//   ->setUsername('iss17005@gmail.com')
//   ->setPassword('toby1705')
// ;

// // Create the Mailer using your created Transport
// $mailer = new Swift_Mailer($transport);

// // Create a message
// $message = (new Swift_Message('test Message'))
//   ->setFrom(['masswade@gmail.com' => 'Massamba Wade'])
//   ->setTo(['bassiroungom@esp.sn', 'dembathioune96@gmail.com' => 'Demba Thioune'])
//   ->setBody('Ceci est un message de test')
//   ; //fluence

// // Send the message
// $result = $mailer->send($message);


$msg = new Mailer("un object");
$msg->setTo(array(
    'bassiroungom@esp.sn', 'dembathioune96@gmail.com'
))->envoi("message a envoyer")
;
