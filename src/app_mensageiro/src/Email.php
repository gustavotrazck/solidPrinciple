<?php

namespace App;

use App\interfaces\IMensagemToken;

class Email implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'e-mail seu token é 555-333';
    }
}
