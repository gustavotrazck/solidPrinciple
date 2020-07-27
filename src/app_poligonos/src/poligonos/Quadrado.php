<?php

namespace App\poligonos;

class Quadrado extends Retangulo
{

    public function setLargura(float $largura): void
    {
        $this->largura = $this->altura = $largura;
    }

    public function setAltura(float $altura): void
    {
        $this->largura = $this->altura = $altura;
    }

    /**
     * Get the value of largura
     */
    public function getLargura(): float
    {
        return $this->largura;
    }

    /**
     * Get the value of altura
     */
    public function getAltura(): float
    {
        return $this->altura;
    }
}
