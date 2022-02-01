<?php

namespace Derizer;

use Symfony\Component\Dotenv\Dotenv;

class DotEnvironment
{
  public static function activate()
  {
    $dotenv = new Dotenv();
    $dotenv->load('.env');
    $dotenv->overload('.env');
    $dotenv->loadEnv('.env');
  }
}