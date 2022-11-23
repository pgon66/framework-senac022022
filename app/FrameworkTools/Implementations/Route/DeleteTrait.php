<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\DeleteController;

trait DeleteTrait {

    private static function delete() {
        switch (self::$processServerElements->getRoute()) {

            case '/delete_user':
                return (new DeleteController)->exec();
            break;
        }
    }

}