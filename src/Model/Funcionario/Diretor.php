<?php

namespace Estudo\Banco\Model\Funcionario;

use Estudo\Banco\Model\Autenticavel;

Class Diretor extends Funcionario implements Autenticavel
{
   
public function calculaBonificacao(): float
{
    return $this->getSalario() * 2;

}

public function realizaAutenticação(string $senha): bool
{
    return $senha == '1234';
}

}