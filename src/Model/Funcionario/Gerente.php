<?php

namespace Estudo\Banco\Model\Funcionario;
use Estudo\Banco\Model\{CPF, Endereco};
use Estudo\Banco\Model\Autenticavel;


Class Gerente extends Funcionario implements Autenticavel

{
public function calculaBonificacao(): float
{
    return $this->getSalario();

}

public function realizaAutenticação(string $senha): bool
{
    return $senha == '4321';
}

}