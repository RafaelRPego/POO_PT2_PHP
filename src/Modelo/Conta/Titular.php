<?php

namespace Estudo\Banco\Modelo\Conta;
use Estudo\Banco\Modelo\Pessoa;
use Estudo\Banco\Modelo\Endereco;
use Estudo\Banco\Modelo\CPF;

class Titular Extends Pessoa
{
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
      
    }

}
