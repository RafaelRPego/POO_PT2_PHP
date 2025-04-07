<?php

namespace Estudo\Banco\Model\Funcionario;

Class Desenvolvedor extends Funcionario
{
   
public function calculaBonificacao(): float
{
    return $this->getSalario() * 0.07;

}

public function progressaoDeCarreira()
{
    $this->setAumentoSalario($this->getSalario()*0.75);
}

}

