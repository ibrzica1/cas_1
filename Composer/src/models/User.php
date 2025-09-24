<?php

namespace Composer\models;
use Composer\Helpers\TestHelper;

class User extends Db
{

    public function test()
    {
      $testHelper = new TestHelper();
      $testHelper->hello();
      echo "Hello";
    }

}