<?php

// use Illuminate\Support\Facades\Route;
use DesignCrystals\BaseController\BaseControllerServiceProvider;


// When testing inside of a Laravel installation, the base class would be Tests\TestCase
class RouteTest extends Orchestra\Testbench\TestCase
{

      /** @test */
      public function visit_test_route()
      {
            // Visit /test and see "Test Laravel package isolated" on it
            $response = $this->get('test');
            $response->assertStatus(200);
            $response->assertSee('Test Laravel package isolated');
      }

      // When testing inside of a Laravel installation, this is not needed
      protected function getPackageProviders($app)
      {
            return [
                  'DesignCrystals\BaseController\BaseControllerServiceProvider'
            ];
      }

      // When testing inside of a Laravel installation, this is not needed
      protected function setUp(): void
      {
            parent::setUp();
            // Route::auth();
      }
}
