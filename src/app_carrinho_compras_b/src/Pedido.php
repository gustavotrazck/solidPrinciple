<?php

namespace App;

use App\CarrinhoCompra;

class Pedido
{
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct()
    {
        $this->status = 'Aberto';
        $this->valorPedido = 0;
        $this->carrinhoCompra = new CarrinhoCompra();
    }

    public function confirmar()
    {

        if ($this->carrinhoCompra->validarCarrinho()) {
            $this->setStatus("Confirmado");
            return true;
        }
        return false;
    }
    /**
     * Get the value of carrinhoCompra
     */
    public function getCarrinhoCompra()
    {
        return $this->carrinhoCompra;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        // echo "<br> fnc getStatus". $this->status;
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
