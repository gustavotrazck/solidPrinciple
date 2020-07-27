<?php

namespace App\poligonos;

class Retangulo
{
    protected $largura;
    protected $altura;

    /**
     * Get the value of largura
     */
    public function getLargura(): float
    {
        return $this->largura;
    }

    /**
     * Set the value of largura
     *
     * @return  self
     */
    public function setLargura(float $largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura(): float
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura(float $altura)
    {
        $this->altura = $altura;

        return $this;
    }
}
