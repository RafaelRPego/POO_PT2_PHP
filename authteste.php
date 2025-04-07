<?php

use Estudo\Banco\Model\{CPF, Endereco};
use Estudo\Banco\Model\Funcionario\{Desenvolvedor, Funcionario, Gerente, Diretor};
use Estudo\Banco\Service\Auth;

require_once 'autoload.php';

$endereco = new Endereco('35030-678', '1527', 'Av. Erasmo Carlos', 'Bairro Santo Expedito', 'Iracema', 'MG');

$auth = new Auth();
$diretor = new Diretor(
    'Julia Almeida',
    new CPF('124.404.480-60'),
    $endereco,
    10000
);

echo $auth->login($diretor, '1234');
