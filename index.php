<?php

require_once __DIR__ . '/lib_ext/autoload.php';

echo __DIR__;

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto Teste","<p>Email é um <strong>teste</strong></p>","contato@danilomarcus.com.br","Danilo Origem","danpayne16@msn.com","Cliente Destino");

var_dump($novoEmail);