<?php

namespace Estudo\Banco\Model\Funcionario;

use Estudo\Banco\Model\{Pessoa, CPF, Endereco};

abstract class Funcionario extends Pessoa
{
    private float $salario;


    public function __construct(string $nome, CPF $cpf, Endereco $endereco, float $salario)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->salario = $salario;
    }


    public function setAumentoSalario(float $valorAumento)
    {
        if ($valorAumento < 0) {
            return "O AUmento não pode ser negativo";
        }

        $this->salario += $valorAumento;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
