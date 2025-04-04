<?php

namespace Estudo\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected float $saldo;

    private static $numeroDeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorSaque)
    {
      
        $taxaSaque = $this->percentualTaxaSaque($valorSaque);
       
        $valorSacado = $valorSaque + $taxaSaque;

        if ($valorSacado > $this->saldo) {
            return "Saldo insuficiente para saque.";
        }

        $this->saldo -= $valorSacado;

        return "Saque de R$ {$valorSaque} realizado com sucesso, taxa de R$ {$taxaSaque} aplicada. Saldo atual: R$ {$this->saldo}.";
    }

    public function deposita(float $valorDeposito)
    {
        if ($valorDeposito <= 0) {
            return "Valor de depósito inválido.";
        }

        $this->saldo += $valorDeposito;

        return "Depósito de R$ {$valorDeposito} realizado com sucesso. Saldo atual: R$ {$this->saldo}.";
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function getTitular(): Titular
    {
        return $this->titular;
    }

    abstract protected function percentualTaxaSaque(float $valorSaque);

}
