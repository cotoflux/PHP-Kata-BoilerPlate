<?php

namespace App;

class Calcula
{
    public $valorInicial = 0;
    public $valorTotal;

    public function Suma($valor)
    {
        $this->valorTotal = $this->valorInicial + $valor;
        return $this->valorTotal;
    }

    public function Reset()
    {
        return $this->valorInicial;
    }
}




