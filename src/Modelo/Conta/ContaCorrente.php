<?php

namespace Estudo\Banco\Modelo\Conta;


Class ContaCorrente extends Conta
{

    public function transfere(float $valorTransferencia, Conta $contaDestino)
    {
        if ($valorTransferencia > $this->saldo) {
            return "Saldo insuficiente para transferência.";
        }

        $this->saca($valorTransferencia);
        $contaDestino->deposita($valorTransferencia);

        return "Transferência de R$ {$valorTransferencia} realizada com sucesso.taxa de R$ {$this->percentualTaxaSaque($valorTransferencia)} Saldo atual: R$ {$this->saldo}.";
    }

    protected function percentualTaxaSaque(float $valorSaque)

    {
        return $valorSaque * 0.05;
    }

}