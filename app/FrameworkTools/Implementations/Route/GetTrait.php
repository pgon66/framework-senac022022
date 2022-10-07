<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\HelloWorldController;

trait GetTrait {

    private static $processServerElements;

    private static function get() {
        switch (self::$processServerElements->getRoute()) {

            case '/hello-world':
                return (new HelloWorldController)->execute();
            break;
        }
    }

}