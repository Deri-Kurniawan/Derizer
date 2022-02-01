<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('d')) {
  function d()
  {
    VarDumper::dump(func_get_args());
  }
}

if (!function_exists('dd')) {
  function dd()
  {
    VarDumper::dump(func_get_args());
    die();
  }
}

function view(string $fileName, ?array $data = [])
{
  if (!is_null($data) && is_array($data)) {
    extract($data);
  }

  require_once 'App\\Views\\' . str_replace('/', '\\', $fileName) . '.php';
}

function baseUrl(?string $path = null)
{
  if (is_null($path)) {
    return $_ENV['BASE_URL'];
  } else {
    return $_ENV['BASE_URL'] . $path;
  }
}

function publicUrl(?string $path = null)
{
  if (is_null($path)) {
    return $_ENV['BASE_URL'] . $_ENV['PUBLIC_URL'];
  } else {
    return $_ENV['BASE_URL'] . $_ENV['PUBLIC_URL'] . $path;
  }
}

function redirect()
{
  return new \Derizer\Redirect;
}