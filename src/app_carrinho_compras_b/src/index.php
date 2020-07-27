<?php
require __DIR__ . "/../vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;


echo "<h3>Com SRP</h3>";

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Computador') ;
$item1->setValor(8500.99);

$item2->setDescricao('Monitor') ;
$item2->setValor(2000.00);

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo '<h4>Pedido</h4>';
echo "<pre>";
print_r($pedido);

echo '<h4>Itens Carrinho</h4>';
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());

echo '<h4>Valor do Pedido</h4>';
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo $total;

echo '<h4>Carrinho está valido</h4>';
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->validarCarrinho());

echo '<h4>Status do Pedido</h4>';
echo "<pre>";
print_r($pedido->getStatus());

echo '<h4>Confirmar do Pedido</h4>';
$pedido->confirmar();

echo '<h4>Status Novo do Pedido</h4>';
echo "<pre>";
print_r($pedido->getStatus());

echo '<h4>Envio e-mail do Pedido</h4>';
if ($pedido->getStatus() == 'Confirmado') {
    echo EmailService::dispararEmail();
}
