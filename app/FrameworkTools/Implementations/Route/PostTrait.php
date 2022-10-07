<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\InsertDataController;

trait PostTrait {

    private static $processServerElements;

    private static function post() {
        switch (self::$processServerElements->getRoute()) {
            case '/insert-data':
                return (new InsertDataController)->exec();
            break;
        }
    }

}