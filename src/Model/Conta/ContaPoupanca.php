<?php

namespace Estudo\Banco\Model\Conta;


Class ContaPoupanca extends Conta
{

    protected function percentualTaxaSaque(float $valorSaque)

    {
        return $valorSaque * 0.03;
    }

}