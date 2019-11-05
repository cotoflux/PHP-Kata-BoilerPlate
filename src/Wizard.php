<?php

namespace App;

use App\interfaces\Persona;
use App\Grimorio;

class Wizard extends Grimorio implements Persona
{
    public $nameWizard;
    public $DNI;

    public function saludar()
    {
        $saludo = "Hola soy un Wizard ";
        echo $saludo.$this->nameWizard." ".$this->DNI.PHP_EOL ;
    }
}