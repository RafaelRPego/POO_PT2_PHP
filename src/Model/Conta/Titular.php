<?php

namespace Estudo\Banco\Model\Conta;

use Estudo\Banco\Model\Autenticavel;
use Estudo\Banco\Model\Pessoa;
use Estudo\Banco\Model\Endereco;
use Estudo\Banco\Model\CPF;

class Titular extends Pessoa implements Autenticavel
{
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
    }
    public function realizaAutenticação(string $senha): bool
    {
        return $senha == 'abcd';
    }
}
