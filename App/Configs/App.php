<?php

namespace App\Configs;

use Derizer\Helper;
use Derizer\Router;
use App\Configs\Database;
use Derizer\DotEnvironment;

class App
{
  public static function start(): void
  {
    DotEnvironment::activate();
    Helper::load('common');
    Database::illuminate();
    Router::origin();
  }
}