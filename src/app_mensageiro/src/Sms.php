<?php

namespace App;

use App\interfaces\IMensagemToken;

class Sms implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'sms seu token é 888-222';
    }
}
