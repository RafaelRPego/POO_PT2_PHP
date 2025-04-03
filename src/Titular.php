<?php
class Titular
{
    private $cpf;
    private string $nome;
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->validateNome($nome);
        $this->nome = $nome;
    }

    public function getCpfTitular(): string
    {
        return $this->cpf->getCpfNumero();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    private function validateNome(string $nome): void
    {
        if (empty($nome)) {
            throw new InvalidArgumentException("Nome inválido.");
        }

        if (strlen($nome) < 3) {
            throw new InvalidArgumentException("Nome deve ter pelo menos 3 caracteres.");
        }
    }
}
