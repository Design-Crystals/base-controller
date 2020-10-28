<?php

namespace DesignCrystals\BaseController\Facades;

use Illuminate\Support\Facades\Facade;

class Base extends Facade
{
      protected static function getFacadeAccessor()
      {
            return 'base';
      }
}
