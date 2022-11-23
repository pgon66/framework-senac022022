<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

class DeleteController extends AbstractControllers {

    public function exec() {
        $requestVariables = $this->processServerElements->getVariables();
        $idUser;

        foreach ($requestVariables as $valueVariable) {
            if ($valueVariable["name"] === "id_user") {
                $idUser = $valueVariable["value"];
            }
        }

        dd($idUser);
    }

}