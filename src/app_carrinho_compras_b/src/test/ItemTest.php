<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase
{

    public function testEstadoInicialItem()
    {
        $item = new Item();
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetSetDescription()
    {
        $descricao = "Cadeira";
        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider datavalores
     */
    public function testGetSetValor($valor)
    {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido()
    {
        $item = new Item();
        $item->setValor(55.20);
        $item->setDescricao('Cadeira');
        // submeter item valido
        $this->assertEquals(true, $item->itemValido());
        $item = new Item();
        $item->setDescricao('Cadeira');
        $item->setValor(-1);
        // submeter item invalido sem valor
        $this->assertFalse($item->itemValido());
        // submeter item invalido sem descricao
        $item = new Item();
        $item->setValor(20.20);
        $this->assertEquals(false, $item->itemValido());
    }

    public function dataValores()
    {
        return [
            [100],
            [-2],
            [0]
        ];
    }
}
