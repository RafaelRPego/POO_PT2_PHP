<?php

namespace Estudo\Banco\Model\Funcionario;
use Estudo\Banco\Model\{CPF, Endereco};


Class Gerente extends Funcionario
{
   
public function calculaBonificacao(): float
{
    return $this->getSalario();

}

}