<?php

namespace App\Configs;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

class ErrorHandler
{
  public static function Whoops(): void
  {
    $whoops = new Run();
    $whoops->pushHandler(new PrettyPageHandler)->register();
  }
  // You able to using other plugins for error handler
}