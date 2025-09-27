<?php

namespace Mail_Lesson\controllers;

use Mail_Lesson\models\User;
use Mail_Lesson\services\SessionService;
use Mail_Lesson\services\MailService;


$user = new User();

class UserController extends SessionService
{

  public function login(array $data)
  {
    $userModel = new User();

    if(!isset($data['username']))
    {
      die("Niste prosledili username");
    }

    if(!isset($data['password']))
    {
      die("Niste prosledili sifru");
    }

    if(!$userModel->userExists($data['username']))
    {
      die("Username ne postoji");
    }

    $user = $userModel->getUserByUsername($data['username']);

    if(!password_verify($data['password'], $user['password']))
    {
      die("Sifre se ne podudaraju");
    }

    $this->setSession('user_id',$user['id'])->setSession('loggedIn',true);

  }

  public function signup(array $data)
  {
    $userModel = new User();
    $mail = new MailService();

    if(!isset($data['username']))
    {
      die("Niste prosledili username");
    }

    if(!isset($data['password']))
    {
      die("Niste prosledili sifru");
    }
    
    if(!isset($data['password_confirm']))
    {
      die("Niste prosledili ponovljenu sifru");
    }

    if($userModel->userExists($data['username']))
    {
      die("Username vec postoji");
    }

    if($data['password'] !== $data['password_confirm'])
    {
      die("Sifra i ponovljena sifra nisu iste");
    }

    $userModel->registerUser($data['username'],$data['password']);

    $title = "Dobrodosli";
    $body = "Dobrodosli {$data['username']} na nasu stranicu!";
    $address = 'test@inbox.mailtrap.io';
    $mail->sendMail($address,$title,$body);

    $user = $userModel->getUserByUsername($data['username']);

    $this->setSession('user_id',$user['id'])->setSession('loggedIn',true);

    
  }

}