<?php

require_once __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, 'email-ssl.com.br', 'contato@danilomarcus.com.br','Danilo86/*', 'ssl', 465, 'contato@danilomarcus.com.br', 'Contato Danilo');

$novoEmail->sendMail("Assunto Teste","<p>Email é um <strong>teste</strong></p>","contato@danilomarcus.com.br","Danilo Origem","danpayne16@msn.com","Cliente Destino");

var_dump($novoEmail);
