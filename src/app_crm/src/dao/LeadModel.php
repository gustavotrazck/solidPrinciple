<?php

namespace App\dao;

use App\BD;
use App\componentes\Notificacao;
use App\interfaces\ICadastro;
use App\interfaces\INotificacao;

class LeadModel extends BD implements ICadastro, INotificacao
{
    public function salvar()
    {
        // lógica
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // lógica
    }
}
