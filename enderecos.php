<?php

require_once 'autoload.php';
use Estudo\Banco\Model\Endereco;

$umEndereco = new Endereco(
    '25685-000',
    '123',
    'Caliban',
    'Tenno',
    'Belo Horizonte',
    'MG'
);
$outroEndereco = new Endereco(
    '45685-000',
    '441',
    'Sargas`Ruk',
    'Grineer',
    'São Paulo',
    'SP'
);

echo $umEndereco->rua . PHP_EOL;

echo $umEndereco . PHP_EOL;

echo $umEndereco->getEnderecoCompleto();