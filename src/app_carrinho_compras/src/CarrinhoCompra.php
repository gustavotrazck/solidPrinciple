<?php

namespace App;

class CarrinhoCompra
{
   private $itens;
   private $status;
   private $valorTotal;

    public function __construct()
    {
        $this->status = 'aberto';
        $this->itens = [];
        $this->valorTotal = 0;
    }

    public function exibirItens()
    {
        return $this->itens;
    }

    public function itemValido(string $item, float $valor)
    {
        if ($item === '') {
            return false;
        }

        if ($valor <= 0) {
            return false;
        }

        return true;
    }

    public function adicionarItem(string $item, float $valor)
    {
        if ($this->itemValido($item, $valor)) {
            array_push($this->itens, ["item" => $item, "valor" => $valor]);
            $this->valorTotal += $valor;
            return true;
        }
        return false;
    }

    public function exibirValorTotal()
    {
        return $this->valorTotal;
        // return array_sum(array_column($this->itens, 'valor'));
    }

    public function exibirStatus()
    {
        return $this->status;
    }

    public function confirmarPedido()
    {
        if ($this->validarCarrinho()) {
            $this->status = "Confirmado";
            return true;
        }
        return false;
    }

    public function enviarEmailConfirmacao()
    {
        echo '<br>... Enviar e-mail de confirmacao...<br>';
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}
