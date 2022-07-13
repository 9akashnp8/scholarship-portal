<?php
require_once 'sendgrid-php\sendgrid-php.php';   

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); //Notice the Namespace and Class name
$dotenv->load();

use SendGrid\Mail\From;
use SendGrid\Mail\To;
use SendGrid\Mail\Mail;

$from = new From("akash.np@lakshyaca.com", "Akash NP");
$to = new To(
    "akash.np@lakshyaca.com",
    "Akash NP",
    [
        'subject' => 'Lakshya Scholarship - Registration Success',
        'name' => 'Akash NP',
        'login_id' => 'LAK-SC-001'
    ]
    );
$email = new Mail(
    $from, 
    $to
);
$email->setTemplateId('d-bbfe2ebc64d140c29d8a0955e85fdbe0');

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
