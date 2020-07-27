<?php

namespace App;

class Item
{
    private $descricao;
    private $valor;

    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor(float $valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function itemValido()
    {
        if ($this->descricao === '') {
            return false;
        }
        if ($this->valor < 0) {
            return false;
        }
        return true;
    }
}
