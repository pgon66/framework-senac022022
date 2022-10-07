<?php

namespace App\FrameworkTools\Implementations\Route;

use App\FrameworkTools\Implementations\Route\GetTrait;
use App\FrameworkTools\Implementations\Route\PostTrait;

use App\FrameworkTools\ProcessServerElements;

class RouteProcess {

    use GetTrait;
    use PostTrait;

    private static $processServerElements;

    public static function execute() {
        self::$processServerElements = ProcessServerElements::start();
        $routeArray = [];
    
        switch(self::$processServerElements->getVerb()) {
            case 'GET':
                return self::get();
            case 'POST':
                return self::post();
        }

    }
}