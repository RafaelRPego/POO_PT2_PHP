<?php

namespace Estudo\Banco\Model\Conta;
use Estudo\Banco\Model\Pessoa;
use Estudo\Banco\Model\Endereco;
use Estudo\Banco\Model\CPF;

class Titular Extends Pessoa
{
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
      
    }

}
