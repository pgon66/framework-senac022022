<?php

namespace App\FrameWorkTools\Implementations\FactoryMethods;

use App\FrameWorkTools\Abstracts\FactoryMethods\AbstractFactoryMethods;
use App\FrameWorkTools\ProcessServerElements;

use App\FrameWorkTools\Implementations\FactoryMethods\BreakStringInVars;

class FactoryProcessServerElement extends AbstractFactoryMethods {

    use BreakStringInVars;

    private $processServerElements;

    public function __construct() {
        $this->processServerElements = ProcessServerElements::start();
    }

    public function operation() {
        $this->processServerElements->setDocumentRoot($_SERVER['DOCUMENT_ROOT']);
        $this->processServerElements->setServerName($_SERVER['SERVER_NAME']);
        $this->processServerElements->setHttpHost($_SERVER['HTTP_HOST']);
        $this->processServerElements->setUri($_SERVER['REQUEST_URI']);

        $this->breakStringInVars($_SERVER['REQUEST_URI']);
        dd($this->processServerElements);
    }

}