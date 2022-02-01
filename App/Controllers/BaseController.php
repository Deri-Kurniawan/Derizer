<?php

namespace App\Controllers;

use Derizer\Request;

class BaseController
{
  public $request;

  public function __construct()
  {
    $this->request = new Request;
  }
}