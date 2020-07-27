<?php
require __DIR__."/../vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
echo "<h3>Sem SRP</h3>";
print_r($carrinho1->exibirItens());
echo "valor total:" . $carrinho1->exibirValorTotal();

// $carrinho1->adicionarItem("Computador", 7800);
// $carrinho1->adicionarItem("Mouse", 200);
// $carrinho1->adicionarItem("Teclado", 220.99);
echo "<pre>";
print_r($carrinho1->exibirItens());
echo "valor total:" . $carrinho1->exibirValorTotal();
echo "<br>";
echo "status:" . $carrinho1->exibirStatus();
echo "<br>";
$carrinho1->adicionarItem("TV", 2220.99);
if($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso';
} else {
    echo "Erro na confirmação do pedido. Carrinho sem itens";
}
echo "<br>";
$carrinho1->enviarEmailConfirmacao();
echo "<br>";
echo "status:" . $carrinho1->exibirStatus();

