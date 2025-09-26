<?php

require_once "vendor/autoload.php";

use Mail_Lesson\controllers\UserController;

if(session_status() === PHP_SESSION_NONE)
{
  session_start();
}

if(isset($_POST['login']))
{
  $userController = new UserController();
  $userController->login($_POST);
}

if(isset($_POST['signup']))
{
  $userController = new UserController();
  $userController->signup($_POST);
}