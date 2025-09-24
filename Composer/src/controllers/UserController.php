<?php

namespace Composer\controllers;

use Composer\models\User;

class UserController
{

  public function sayHello()
  {
    $user = new User();
    $user->test();
  }

}