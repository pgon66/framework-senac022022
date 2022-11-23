<?php

namespace App\FrameworkTools\Implementations\Route;

use App\FrameworkTools\Implementations\Route\GetTrait;
use App\FrameworkTools\Implementations\Route\PostTrait;
use App\FrameworkTools\Implementations\Route\PutTrait;
use App\FrameworkTools\Implementations\Route\DeleteTrait;

use App\FrameworkTools\ProcessServerElements;

class RouteProcess {

    use GetTrait;
    use PostTrait;
    use PutTrait;
    use DeleteTrait;

    private static $processServerElements;

    public static function execute() {
        self::$processServerElements = ProcessServerElements::start();
        $routeArray = [];
    
        switch(self::$processServerElements->getVerb()) {
            case 'GET':
                return self::get();
            case 'POST':
                return self::post();
            case 'PUT':
                return self::put();
            case 'DELETE':
                return self::delete();
        }

    }
}