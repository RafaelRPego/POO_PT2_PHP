<?php

namespace Estudo\Banco\Service;

use Estudo\Banco\Model\Autenticavel;

class Auth
{
    public function login(Autenticavel $autenticavel, string $senha)
    {
        if (!$autenticavel->realizaAutenticação($senha)) {
            return "Senha incorreta!";
        }

        return "usuário logado com sucesso!";
    }
}
