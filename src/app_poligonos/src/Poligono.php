<?php

namespace App;

class Poligono
{
    private $forma;

    public function setForma(object $forma): void
    {
        $this->forma = $forma;
    }
    /**
     * Get the value of forma
     */
    public function getForma()
    {
        return $this->forma;
    }
}
