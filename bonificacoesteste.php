<?php

require_once 'autoload.php';

use Estudo\Banco\Model\{CPF, Endereco};
use Estudo\Banco\Model\Funcionario\{Desenvolvedor, Funcionario, Gerente, Diretor};
use Estudo\Banco\Service\BonificacoesController;

$endereco = new Endereco('35030-678', '1527', 'Av. Erasmo Carlos', 'Bairro Santo Expedito', 'Iracema', 'MG');

$f1 = new Desenvolvedor(
    'Carlos Santanna',
    new CPF('044.345.160-51'),
    $endereco,
    5000
);

$f1->progressaoDeCarreira();

$f2 = new Desenvolvedor(
    'Elvira Soares',
    new CPF('395.291.850-49'),
    $endereco,
    3000
);

$diretor = new Diretor(
    'Julia Almeida',
    new CPF('124.404.480-60'),
    $endereco,
    50000
);

$gerente = new Gerente(
    'José José',
    new CPF('124.404.480-60'),
    $endereco,
    50000
);


$controlador = new BonificacoesController();
$controlador->adicionaBonificacao($f1);
$controlador->adicionaBonificacao($f2);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($gerente);

echo $controlador->recuperaTotal();