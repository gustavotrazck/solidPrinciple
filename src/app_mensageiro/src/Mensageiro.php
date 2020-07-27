<?php

namespace App;

use App\interfaces\IMensagemToken;

class Mensageiro
{
    private $canal;

    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }
    public function enviarToken(): void
    {
        $this->getCanal()->enviar();
    }

    /**
     * Get the value of canal
     */
    public function getCanal(): IMensagemToken
    {
        return $this->canal;
    }

    /**
     * Set the value of canal
     *
     * @return  self
     */
    public function setCanal(IMensagemToken $canal): void
    {
        $this->canal = $canal;
    }
}
