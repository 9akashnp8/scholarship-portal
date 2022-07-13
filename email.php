<?php
require_once 'sendgrid-php\sendgrid-php.php';   

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo $_ENV['SENDGRID_API_KEY'];

use SendGrid\Mail\Mail;

$email = new Mail();
$email->setFrom("akash.np@lakshyaca.com", "Example User");
$email->setSubject("Sending with Twilio SendGrid is Fun");
$email->addTo("akash.np@lakshyaca.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '.  $e->getMessage(). "\n";
}
?>
