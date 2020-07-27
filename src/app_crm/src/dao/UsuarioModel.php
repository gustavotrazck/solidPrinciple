<?php

namespace App\dao;

use App\BD;
use App\componentes\Log;
use App\componentes\Notificacao;
use App\interfaces\ICadastro;
use App\interfaces\ILog;
use App\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, INotificacao, ILog
{
    public function salvar()
    {
        // lógica
    }

    public function registrarLog(Log $log)
    {
        // lógica
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // lógica
    }
}
