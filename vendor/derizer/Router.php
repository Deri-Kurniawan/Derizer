<?php

namespace Derizer;

use Error;
use Exception;
use Derizer\Request;

class Router
{
  private static $Controller = 'Welcome';
  private static $Method     = 'index';
  private static $Params     = [];

  public static function origin(): void
  {

    $originUrl        = (!is_null(Request::getVar('derizer-framework-url'))) ? Request::getVar('derizer-framework-url') : '';

    $explodedUrl      = explode('/', $originUrl);

    self::$Controller = (key_exists(0, $explodedUrl) && $explodedUrl[0] !== '') ? $explodedUrl[0] : $_ENV['DEFAULT_CONTROLLER'];
    self::$Method     = (key_exists(1, $explodedUrl) && $explodedUrl[1] !== '') ? $explodedUrl[1] : $_ENV['DEFAULT_METHOD'];

    $controllerClassWithNamespaceStr = '\\App\\Controllers\\' . self::$Controller;

    try {
      self::$Controller = new $controllerClassWithNamespaceStr;
    } catch (Error $error) {
      throw new Exception($error->getMessage());
    }

    unset($explodedUrl[0]);
    unset($explodedUrl[1]);

    self::$Params = $explodedUrl;

    call_user_func_array([self::$Controller, self::$Method], self::$Params);
  }
}