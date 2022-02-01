<?php

namespace App\Configs;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
  public static function illuminate(): void
  {
    $capsule = new Capsule;

    $capsule->addConnection([
      'driver'    => $_ENV['DB_DRIVER'],
      'host'      => $_ENV['DB_HOST'],
      'database'  => $_ENV['DB_NAME'],
      'username'  => $_ENV['DB_USERNAME'],
      'password'  => $_ENV['DB_PASSWORD'],
      'charset'   => $_ENV['DB_CHARSET'],
      'collation' => $_ENV['DB_COLLATION'],
      'prefix'    => $_ENV['DB_PREFIX'],
    ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();
  }
  // You able to using other plugins for database
}