<?php

namespace DesignCrystals\BaseController\Tests;

use DesignCrystals\BaseController\BaseControllerServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
      public function setUp(): void
      {
            parent::setUp();
            // additional setup
      }

      protected function getPackageProviders($app)
      {
            return [
                  BaseControllerServiceProvider::class,
            ];
      }

      protected function getEnvironmentSetUp($app)
      {
            // perform environment setup
      }
}
