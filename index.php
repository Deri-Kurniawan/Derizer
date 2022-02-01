<?php

require_once __DIR__ . '\\vendor\\autoload.php';

use App\Configs\App;
use App\Configs\ErrorHandler;

ErrorHandler::Whoops();
App::start();