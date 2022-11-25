<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

class DeleteController extends AbstractControllers {

    public function exec() {
        $response = ['success' => true];

        $requestVariables = $this->processServerElements->getVariables();
        $idUser;

        try {

            foreach ($requestVariables as $valueVariable) {
                if ($valueVariable["name"] === "id_user") {
                    $idUser = $valueVariable["value"];
                }
            }

            if(!$idUser) {
                $missingAttribute = 'userIdIsNull';
                throw new \Exception("You need to inform userId variable");
            }
    
            $users = $this
                        ->pdo
                        ->query("SELECT * FROM user WHERE id_user = '{$id_user}';")
                        ->fetchAll();

            if (sizeof($users) === 0) {
                $missingAttribute = 'thisUserNoExist';
                throw new \Exception("There is not record of this user in db");
            }

            $sql = "DELETE FROM user WHERE id_user= :id_user";
    
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id_user' => $idUser]);

        } catch (\Exception $e) {

            $response = [
                'sucess' => false,
                'message' => $e->getMessage(),
                'missingAttribute' => $missingAttribute
            ];

        }

        view($response);
    }

}