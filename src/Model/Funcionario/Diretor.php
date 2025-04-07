<?php

namespace Estudo\Banco\Model\Funcionario;

Class Diretor extends Funcionario
{
   
public function calculaBonificacao(): float
{
    return $this->getSalario() * 2;

}

public function realizaAutenticação(string $senha): bool
{
    return $senha === '1234';
}

}