<?php

namespace Mail_Lesson\services;

require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

class MailService
{
  public function __construct()
  {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $mailer = new PHPMailer();

    $mailer->isSMTP();
    $mailer->Host = $_ENV['MAILTRAP_HOST'];
    $mailer->SMTPAuth = true;
    $mailer->Username = $_ENV['MAILTRAP_USERNAME'];
    $mailer->Password = $_ENV['MAILTRAP_PASSWORD'];
    $mailer->Port = $_ENV['MAILTRAP_PORT'];
  }

  public function sendMail($mailer,$address,$title,$body)
  {
    $mailer->setFrom('igorbrzica1@gmail.com','Igor');
    $mailer->addAddress($address);
    $mailer->Subject = $title;
    $mailer->Body = $body;
    $mailer->send();
  }
  
}