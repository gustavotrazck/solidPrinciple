<?php

namespace App\poligonos;

class Paralelogramo
{
    private $tipo;

    public function getArea(): float
    {
        return $this->getTipo()->getAltura() * $this->getTipo()->getAltura();
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo(object $tipo): void
    {
        $this->tipo = $tipo;
    }
}
