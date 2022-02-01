<?php

namespace Derizer;

class Request
{
  public static function getVar($name)
  {
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : null;
  }
  public static function getGet($name)
  {
    return isset($_GET[$name]) ? $_GET[$name] : null;
  }
  public static function getPost($name)
  {
    return isset($_POST[$name]) ? $_POST[$name] : null;
  }
  public static function getFiles($name)
  {
    return isset($_FILES[$name]) ? $_FILES[$name] : null;
  }
}