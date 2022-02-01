<?php

namespace Derizer;

class Helper
{
  public static function load($file): void
  {
    require_once "helpers/$file.php";
  }
}