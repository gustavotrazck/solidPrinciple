<?php

require __DIR__ . '/vendor/autoload.php';

use App\Mensageiro;
use App\Email;
use App\Sms;

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo "<br>";
$sms = new Mensageiro(new Sms());
$sms->enviarToken();

// $msg = new Mensageiro();
// $msg->setCanal('email');
// $msg->enviarToken();


// $sms = new Mensageiro();
// $sms->setCanal('sms');
// $sms->enviarToken();
