<?php

namespace Estudo\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;


    public function __construct(string $nome, CPF $cpf, string $cargo, Endereco $endereco)
    {   
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = $cargo;
    }

    public function getcargo(): string
    {
        return $this->cargo;
    }
}
