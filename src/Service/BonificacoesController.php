<?php

namespace Estudo\Banco\Service;

use Estudo\Banco\Model\Funcionario\Funcionario;


Class BonificacoesController 
{

    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): int
    {
        return $this->totalBonificacoes;
    }
}