<?php

namespace Estudo\Banco\Modelo;

use InvalidArgumentException;

class Pessoa
{
    protected string $nome;
    private $cpf;
    private $endereco;


    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        $this->validateNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
       
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): String
    {
        return $this->cpf->getCpfNumero();
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }


    protected function validateNome(string $nome): void
    {
        if (empty($nome)) {
            throw new InvalidArgumentException("Nome inválido.");
        }

        if (strlen($nome) < 3) {
            throw new InvalidArgumentException("Nome deve ter pelo menos 3 caracteres.");
        }
    }
}