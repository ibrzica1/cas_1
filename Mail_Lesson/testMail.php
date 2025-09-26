<?php

require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$mailer = new PHPMailer();

$mailer->isSMTP();
$mailer->Host = $_ENV['MAILTRAP_HOST'];
$mailer->SMTPAuth = true;
$mailer->Username = $_ENV['MAILTRAP_USERNAME'];
$mailer->Password = $_ENV['MAILTRAP_PASSWORD'];
$mailer->Port = $_ENV['MAILTRAP_PORT'];

$mailer->setFrom('igorbrzica1@gmail.com','Igor');
$mailer->addAddress('test@inbox.mailtrap.io');

$mailer->isHTML();

$mailer->Subject = 'Drugi mail';
$mailer->Body = '<h1>Hello vorld</h1><p>This is a test</p>';
$path = realpath("racuni/sample-invoice.pdf");
$mailer->addAttachment($path);

$mailer->send();