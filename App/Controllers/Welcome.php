<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Welcome extends BaseController
{
  public function index()
  {
    echo "Welcome To Derizer Web Framework";
  }

  public function about()
  {
    return redirect()->out('https://github.com/deri-kurniawan/derizer');
  }
}