<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\UpdateDataController;

trait PutTrait {

    private static $processServerElements;

    private static function put() {
        switch (self::$processServerElements->getRoute()) {

            case '/update-data':
                return (new UpdateDataController)->exec();
            break;
        }
    }

}