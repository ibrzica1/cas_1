<?php

require_once "vendor/autoload.php";

use Composer\controllers\UserController;

$userController = new UserController;
$userController->sayHello();

