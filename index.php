<?php

$mainPosition = __DIR__;

require_once("{$mainPosition}\helper\helper.php");
require_once("{$mainPosition}\\vendor\autoload.php");

use Bootstrap\Env;
use App\FrameWorkTools\ProcessServerElements;
use App\FrameWorkTools\Implementations\FactoryMethods\FactoryProcessServerElement;

Env::execute();

$factoryProcessServerElement = new FactoryProcessServerElement();
$factoryProcessServerElement->operation();