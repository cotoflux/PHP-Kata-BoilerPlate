<?php

use PHPUnit\Framework\TestCase;
use App\Calcula;


class CalculaTest extends TestCase
{

        public function testValorInicial()
        {
            $primerValor = new Calcula();
            $valorEsperado = 0;
            $valorObtenido = $primerValor->valorInicial;
            $this->assertEquals($valorEsperado, $valorObtenido);
        }

        public function testSumaCorrectamente()
        {
            $segundoValor = new Calcula();
            $valorEsperado = 5;
            $valorObtenido = $segundoValor->Suma(5);
            $this->assertEquals($valorEsperado, $valorObtenido);

        }

        public function testResetea()
        {
            $reset = new Calcula();
            $valorEsperado = 0;
            $valorObtenido = $reset->Reset();
            $this->assertEquals($valorEsperado, $valorObtenido);
        }



}